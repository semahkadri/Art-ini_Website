<?php
require_once 'C:\xampp\htdocs\mehdi\config.php';

class TripInfC {
    
    public function afficherTripInf() {
        $sql='SELECT * FROM evenement';
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
        $sql="SELECT * FROM evenement where id=:id";
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
        $sql="SELECT * FROM evenement where id=:id";
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
        $sql="SELECT * FROM evenement where nom='$loc'";
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

        $sql = "INSERT INTO evenement (desc_eve,nom,directeur,photo) values (:desc_eve,:nom_influenceur,:directeur,:photo)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'desc_eve'=>$Type->getdesceveType(),
            'nom'=>$Type->getNomType(),
            'directeur'=>$Type->getdirecteurType(),
            'photo'=>$Type->getPhotoType(),
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
            $query=$db->prepare("delete from evenement where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierTripInf($tripinf,$id) {
        try {
            $sql="UPDATE evenement SET desc_eve=:desc_eve,nom=:nom,directeur=:directeur,photo=:photo WHERE id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'id'=>$id,
                'desc_eve'=>$Type->getdesceveType(),
                'nom'=>$Type->getNomType(),
                'directeur'=>$Type->getdirecteurType(),
                'photo'=>$Type->getPhotoType()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherTripInf($nom) {
        $sql="SELECT * FROM evenement where nom='$nom'";
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