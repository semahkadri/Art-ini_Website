<?php

//Definition et structure d'un objet Categorie Produit

class Type {
    private  $desc_pro;
    private  $nom;
    private  $valeur;


    public function __construct ($desc_pro,  $nom, $valeur) {
        $this->desc_pro=$desc_pro;
        $this->nom=$nom;
        $this->valeur=$valeur;
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

}

?>