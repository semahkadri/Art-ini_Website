<?php
require_once 'C:\xampp\htdocs\ilyes\config.php';

class InfluC {
    
    public function afficherInfluenceur() {
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


    public function afficherInfluenceurStat() {
        $sql='SELECT * FROM influenceur WHERE nbr_ab_inf=(SELECT max(nbr_ab_inf) FROM influenceur)';
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

     public function ajouterInfluenceur($influenceur) {
        $sql = "insert into influenceur (historique_influenceur,nom_influenceur,prenom_influenceur,photo_influenceur) values (:historique_influenceur,:nom_influenceur,:prenom_influenceur,:photo_influenceur)" ;
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'historique_influenceur'=>$influenceur->getHistoriqueType(),
            'nom_influenceur'=>$influenceur->getNomType(),
            'prenom_influenceur'=>$influenceur->getPrenomType(),
            'photo_influenceur'=>$influenceur->getPhototype(),
        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerInfluenceur($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("delete from influenceur where id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function modifierInfluenceur($influenceur,$id) {
        try {
            $sql="update influenceur set historique_influenceur=:historique_influenceur,nom_influenceur=:nom_influenceur,prenom_influenceur=:prenom_influenceur,photo_influenceur=:photo_influenceur where id=:id";
            $db=config::getConnexion();
            $query=$db->prepare($sql); 
            $query->execute([
            'id'=>$id,
            'historique_influenceur'=>$influenceur->getHistoriqueType(),
            'nom_influenceurm_inf'=>$influenceur->getNomType(),
            'prenom_influenceurm_inf'=>$influenceur->getPrenomType(),
            'photo_influenceur'=>$influenceur->getPhotoType(),
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chercherInfluenceur($nom_influenceur) {
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