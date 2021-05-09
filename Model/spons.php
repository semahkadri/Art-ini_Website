<?php

//Definition et structure d'un objet Influenceur

class Spons {
   
    private  $historique_sponsor;
    private  $nom_sponsor;
    private  $photo_sponsor;


    public function __construct ($historique_sponsor,  $nom_sponsor, $photo_sponsor) {
        $this->historique_sponsor=$historique_sponsor;
        $this->nom_sponsor=$nom_sponsor;
        $this->photo_sponsor=$photo_sponsor;
    }



    public function setHistoriqueType ($historique_sponsor) {
        $this->historique_sponsor=$historique_sponsor;
    }
    public function getHistoriqueType () {
        return $this->historique_sponsor;
    }

    public function setNomType ($nom_sponsor) {
        $this->nom_sponsor=$nom_sponsor;
    }
    public function getNomType () {
        return $this->nom_sponsor;
    }


    public function setPhotoType ($photo_sponsor) {
        $this->photo_sponsor=$photo_sponsor;
    }
    public function getPhotoType () {
        return $this->photo_sponsor;
    }

}

?>