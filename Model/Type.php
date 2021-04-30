<?php

//Definition et structure d'un objet Categorie Produit

class Type {
    private  $historique_categorie;
    private  $nom_categorie;
    private  $photo_categorie;


    public function __construct ($historique_categorie,  $nom_categorie, $photo_categorie) {
        $this->historique_categorie=$historique_categorie;
        $this->nom_categorie=$nom_categorie;
        $this->photo_categorie=$photo_categorie;
    }



    public function setHistoriqueType ($historique_categorie) {
        $this->historique_categorie=$historique_categorie;
    }
    public function getHistoriqueType () {
        return $this->historique_categorie;
    }

    public function setNomType ($nom_categorie) {
        $this->nom_categorie=$nom_categorie;
    }
    public function getNomType () {
        return $this->nom_categorie;
    }


    public function setPhotoType ($photo_categorie) {
        $this->photo_categorie=$photo_categorie;
    }
    public function getPhotoType () {
        return $this->photo_categorie;
    }

}

?>