<?php
include_once 'C:\xampp\htdocs\mehdi\config.php';

class TypeC {
    
    public function afficherType() {
        $sql="SELECT * FROM promotion";
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
        $sql="SELECT * FROM promotion where id=:id";
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
        $sql = "INSERT INTO promotion (desc_pro,nom,valeur) values (:desc_pro,:nom,:valeur)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'desc_pro'=>$Type->getdescproType(),
            'nom'=>$Type->getNomType(),
            'valeur'=>$Type->getvaleurType()

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerTypeInst($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("DELETE FROM promotion WHERE id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierTypeInst($Type,$id) {
        try {
            $sql="UPDATE promotion SET desc_pro=:desc_pro,nom=:nom,valeur=:valeur WHERE id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
            'id'=>$id,
            'desc_pro'=>$Type->getdescproType(),
            'nom'=>$Type->getNomType(),
            'valeur'=>$Type->getvaleurType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTypeInst($nom) {
        $sql="SELECT * FROM promotion where nom='$nom'";
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
        $sql="SELECT * FROM promotion where nom like '".$str."%' or id like '".$str."%' ";
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