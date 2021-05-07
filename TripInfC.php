<?php
require_once 'C:\xampp\htdocs\ilyes\config.php';

class TripInfC {
    
    public function afficherTripInf() {
        $sql='SELECT * FROM influenceur';
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function chercherid($id) {
        $sql="SELECT * FROM influenceur where id=:id";
        $db=Config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id' =>$id ]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercheridInf($id) {
        $sql="SELECT * FROM influenceur where id=:id";
        $db=Config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id' =>$id ]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }


    public function chercherLocalisation($loc) {
        $sql="SELECT * FROM influenceur where nom_influenceur='$loc'";
        $db=Config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        } 
        catch (PDOException $e) { 
            $e->getMessage();
        }
    } 


     public function ajouterTripInf($tripinf,$id) {

        $sql = "INSERT INTO influenceur (historique_influenceur,nom_influenceur,prenom_influenceur,photo_influenceur) values (:historique_influenceur,:nom_influenceur,:prenom_influenceur,:photo_influenceur)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_influenceur'=>$Type->getHistoriqueType(),
            'nom_influenceur'=>$Type->getNomType(),
            'prenom_influenceur'=>$Type->getPrenomType(),
            'photo_influenceur'=>$Type->getPhotoType(),
            'id'=>$id
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTripInf($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from influenceur where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierTripInf($tripinf,$id) {
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

    public function chercherTripInf($nom_influenceur) {
        $sql="SELECT * FROM influenceur where nom_influenceur='$nom_influenceur'";
        $db=Config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 


}
?>