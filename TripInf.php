<?php




class TripInf {

    private string $desc_eve;
    private string $nom;
    private string $directeur;
    private $photo;
    
    


    public function __construct (string $desc_eve, string $nom ,string $directeur, $photo) {
        $this->desc_eve=$desc_eve;
        $this->nom=$nom;
        $this->directeur=$directeur;
        $this->photor=$photo;
       
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
        return $this->Prenom_influenceur;
    }

    public function setPhotoType ($photo) {
        $this->photo=$photo;
    }
    public function getPhotoType () {
        return $this->photo;
    }


} 

?>