<?php

//Definition et structure d'un objet Categorie Produit

class Type {
    private  $desc_eve;
    private  $nom;
    private  $directeur;
    private  $photo;


    public function __construct ($desc_eve,  $nom ,$directeur, $photo) {
        $this->desc_eve=$desc_eve;
        $this->nom=$nom;
        $this->directeur=$directeur;
        $this->photo=$photo;
    }



    public function setdesceveType ($desc_eve) {
        $this->desc_eve=$desc_eve;
    }
    public function getdesceveType () {
        return $this->desc_eve;
    }

    public function setNomType ($nom) {
        $this->nom=$nom;
    }
    public function getNomType () {
        return $this->nom;
    }


    public function setdirecteurType ($directeur) {
        $this->directeur=$directeur;
    }
    public function getdirecteurType () {
        return $this->directeur;
    }

    public function setPhotoType ($photo) {
        $this->photo=$photo;
    }
    public function getPhotoType () {
        return $this->photo;
    }

}

?>