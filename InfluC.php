<?php
require_once 'C:\xampp\htdocs\mehdi\config.php';

class InfluC {
    
    public function afficherInfluenceur() {
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


    public function afficherInfluenceurStat() {
        $sql='SELECT * FROM evenement WHERE nbr_ab_inf=(SELECT max(nbr_ab_inf) FROM evenement)';
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

     public function ajouterInfluenceur($evenement) {
        $sql = "insert into evenement (desc_eve,nom,directeur,photo) values (:desc_eve,:nom,:directeur,:photo)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'desc_eve'=>$evenement->getdesceveType(),
            'nom'=>$evenement->getNomType(),
            'directeur'=>$evenement->getdirecteurType(),
            'photor'=>$evenement->getPhototype(),
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerInfluenceur($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from evenement where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierInfluenceur($evenement,$id) {
        try {
            $sql="update evenement set desc_eve=:desc_eve,nom=:nom,directeur=:directeur,photo=:photo where id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
            'id'=>$id,
            'desc_eve'=>$evenement->getdesceveType(),
            'nom'=>$evenement->getNomType(),
            'directeur'=>$evenement->getdirecteurType(),
            'photo'=>$evenement->getPhotoType(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherInfluenceur($evenement) {
        $sql="SELECT * FROM evenement where nom='$evenement'";
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