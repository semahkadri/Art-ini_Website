<?php
require_once 'C:\xampp\htdocs\ilyes\config.php';

class InfluC {
    
    public function affichersponsor() {
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


    public function affichersponsorStat() {
        $sql='SELECT * FROM sponsor WHERE nbr_ab_inf=(SELECT max(nbr_ab_inf) FROM sponsor)';
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

     public function ajoutersponsor($sponsor) {
        $sql = "insert into sponsor (historique_sponsor,nom_sponsor,photo_sponsor) values (:historique_sponsor,:nom_sponsor,:photo_sponsor)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_sponsor'=>$sponsor->getHistoriqueType(),
            'nom_sponsor'=>$sponsor->getNomType(),
            'photo_sponsor'=>$sponsor->getPhototype(),
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimersponsor($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from sponsor where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifiersponsor($sponsor,$id) {
        try {
            $sql="update sponsor set historique_sponsor=:historique_sponsor,nom_sponsor=:nom_sponsor,photo_sponsor=:photo_sponsor where id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
            'id'=>$id,
            'historique_sponsor'=>$sponsor->getHistoriqueType(),
            'nom_sponsor_inf'=>$sponsor->getNomType(),
            'photo_sponsor'=>$sponsor->getPhotoType(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function cherchersponsor($nom_sponsor) {
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