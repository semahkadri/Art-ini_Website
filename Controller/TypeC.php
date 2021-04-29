<?php
include_once 'C:\xampp\htdocs\demo\Semah\config.php';

class TypeC {
    
    public function afficherType() {
        $sql="SELECT * FROM categorie";
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
        $sql="SELECT * FROM categorie where id=:id";
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
        $sql = "INSERT INTO categorie (historique_categorie,nom_categorie,photo_categorie) values (:historique_categorie,:nom_categorie,:photo_categorie)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_categorie'=>$Type->getHistoriqueType(),
            'nom_categorie'=>$Type->getNomType(),
            'photo_categorie'=>$Type->getPhotoType()

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTypeInst($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("DELETE FROM categorie WHERE id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierTypeInst($Type,$id) {
        try {
            $sql="UPDATE categorie SET historique_categorie=:historique_categorie,nom_categorie=:nom_categorie,photo_categorie=:photo_categorie WHERE id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id'=>$id,
            'historique_categorie'=>$Type->getHistoriqueType(),
            'nom_categorie'=>$Type->getNomType(),
            'photo_categorie'=>$Type->getPhotoType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTypeInst($nom_categorie) {
        $sql="SELECT * FROM categorie where nom_categorie='$nom_categorie'";
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
        $sql="SELECT * FROM categorie where nom_categorie like '".$str."%' or id like '".$str."%' ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            return $e->getMessage();
        }
    }
    public function chercherid($id) {
        $sql="SELECT * FROM categorie where id=:id";
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

    public function chercherType($nom_categorie) {
        $sql="SELECT * FROM categorie where nom_categorie='$nom_categorie'";
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