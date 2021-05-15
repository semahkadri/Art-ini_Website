<?php


class promo {
    private  $desc_pro;
    private  $nom;
    private  $valeur;
    private  $PA_Promo;
    private  $idevent;


    public function __construct ($desc_pro,  $nom, $valeur,$PA_Promo, $idevent) {
        $this->desc_pro=$desc_pro;
        $this->nom=$nom;
        $this->valeur=$valeur;
        $this->PA_Promo=$PA_Promo;
        $this->idevent=$idevent;

    }



    public function setdescproType ($desc_pro) {
        $this->desc_pro=$desc_pro;
    }
    public function getdescproType () {
        return $this->desc_pro;
    }

    public function setNomType ($nom) {
        $this->nom=$nom;
    }
    public function getNomType () {
        return $this->nom;
    }


    public function setvaleurType ($valeur) {
        $this->valeur=$valeur;
    }
    public function getvaleurType () {
        return $this->valeur;
    }
    public function setPAPromoType ($PA_Promo) {
        $this->PA_Promo=$PA_Promo;
    }
    public function getPAPromoType () {
        return $this->PA_Promo;
    }
    public function setideventType ($idevent) {
        $this->idevent=$idevent;
    }
    public function getideventType () {
        return $this->idevent;
    }

}

?>