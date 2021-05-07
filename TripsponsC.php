<?php
require_once 'C:\xampp\htdocs\ilyes\config.php';

class TripInfC {
    
    public function afficherTripInf() {
        $sql='SELECT * FROM sponsor';
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
        $sql="SELECT * FROM sponsor where id=:id";
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
        $sql="SELECT * FROM sponsor where id=:id";
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
        $sql="SELECT * FROM sposnor where nom_sponsor='$loc'";
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

        $sql = "INSERT INTO sponsor (historique_sponsor,nom_sponsor,photo_sponsor) values (:historique_sponsor,:nom_sponsor,:photo_sponsor)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_sponsor'=>$Type->getHistoriqueType(),
            'nom_sponsor'=>$Type->getNomType(),
            'photo_sponsor'=>$Type->getPhotoType(),
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
            $query=$db->prepare("delete from sponsor where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



     public function modifierTripInf($tripinf,$id) {
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

    public function chercherTripInf($nom_sponsor) {
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


}
?>