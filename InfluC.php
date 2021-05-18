<?php
include "configg.php";

class InfluC {
    
    public function afficherType() {
        $sql="SELECT * FROM influenceur";
        $db=config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }



    function affichercartetri($cc)
    {
        
        $sql="SELECT * FROM influenceur ORDER BY $cc desc ";

        $db = config::getConnexion();
        try
        {
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    public function chercheridTypeInst($id) {
        $sql="SELECT * FROM influenceur where id=:id";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id' =>$id]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function ajouterTypeInst($Type) {
        $sql = "INSERT INTO influenceur (historique_influenceur,nom_influenceur,prenom_influenceur,photo_influenceur) values (:historique_influenceur,:nom_influenceur,:prenom_influenceur,:photo_influenceur)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_influenceur'=>$Type->getHistoriqueType(),
            'nom_influenceur'=>$Type->getNomType(),
            'prenom_influenceur'=>$Type->getPrenomType(),
            'photo_influenceur'=>$Type->getPhotoType()

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTypeInst($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("DELETE FROM influenceur WHERE id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierTypeInst($Type,$id) {
        try {
            $sql="UPDATE influenceur SET historique_influenceur=:historique_influenceur,nom_influenceur=:nom_influenceur,prenom_influenceur=:prenom_influenceur,photo_influenceur=:photo_influenceur WHERE id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id'=>$id,
            'historique_influenceur'=>$Type->getHistoriqueType(),
            'nom_influenceur'=>$Type->getNomType(),
            'prenom_influenceur'=>$Type->getPrenomType(),
            'photo_influenceur'=>$Type->getPhotoType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTypeInst($nom_influenceur) {
        $sql="SELECT * FROM influenceur where nom_influenceur='$nom_influenceur'";
        $db=config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 

    function rechercherType($str){
        $sql="SELECT * FROM influenceur where nom_influenceur like '".$str."%' or prenom_influenceur like '".$str."%' or id like '".$str."%' ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }


}
?>