<?php
include_once 'C:\xampp\htdocs\ilyes\config.php';

class TypeC {
    
    public function afficherType() {
        $sql="SELECT * FROM sponsor";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function chercheridTypeInst($id) {
        $sql="SELECT * FROM sponsor where id=:id";
        $db=Config::getConnexion();
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
        $sql = "INSERT INTO sponsor (historique_sponsor,nom_sponsor,photo_sponsor) values (:historique_sponsor,:nom_sponsor,:photo_sponsor)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_sponsor'=>$Type->getHistoriqueType(),
            'nom_sponsor'=>$Type->getNomType(),
            'photo_sponsor'=>$Type->getPhotoType()

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTypeInst($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("DELETE FROM sponsor WHERE id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierTypeInst($Type,$id) {
        try {
            $sql="UPDATE sponsor SET historique_sponsor=:historique_sponsor,nom_sponsor=:nom_sponsor,photo_sponsor=:photo_sponsor WHERE id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id'=>$id,
            'historique_sponsor'=>$Type->getHistoriqueType(),
            'nom_sponsor'=>$Type->getNomType(),
            'photo_sponsor'=>$Type->getPhotoType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTypeInst($nom_sponsor) {
        $sql="SELECT * FROM sponsor where nom_sponsor='$nom_sponsor'";
        $db=Config::getConnexion();
        try{
        $liste = $db->query($sql);
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    } 

    function rechercherType($str){
        $sql="SELECT * FROM sponsor where nom_sponsor like '".$str."%' or id like '".$str."%' ";
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