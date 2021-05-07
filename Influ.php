<?php

//Definition et structure d'un objet Influenceur

class Influ {
   
    private string $historique_influenceur;
    private string $nom_influenceur;
    private string $prenom_influenceur;
    private $photo_influenceur;
    


    public function __construct (string $historique_influenceur, string $nom_influenceur ,string $prenom_influenceur, $photo_influenceur) {
        $this->historique_influenceur=$historique_influenceur;
        $this->nom_influenceur=$nom_influenceur;
        $this->prenom_influenceur=$prenom_influenceur;
        $this->photo_influenceur=$photo_influenceur;
       
    }

    
   
    
    
    
    public function setHistoriqueType ($historique_influenceur) {
        $this->historique_influenceur=$historique_influenceur;
    }
    public function getHistoriqueType () {
        return $this->historique_influenceur;
    }
    

    public function setNomType ($nom_influenceur) {
        $this->nom_influenceur=$nom_influenceur;
    }
    public function getNomType () {
        return $this->nom_influenceur;
    }

    public function setPrenomType ($prenom_influenceur) {
        $this->prenom_influenceur=$prenom_influenceur;
    }
    public function getPrenomType () {
        return $this->Prenom_influenceur;
    }

    public function setPhotoType ($photo_influenceur) {
        $this->photo_influenceur=$photo_influenceur;
    }
    public function getPhotoType () {
        return $this->photo_influenceur;
    }



    


   

}

?>