<?php

class Commande

{   private ?int $id=null;
	private ?string $name ;
	private ?string $prix;
	private ?string $email;
	private ?string $produit;
	private ?string $adress;
	private ?int $phone;
	private ?int $pmode;
	

	public function __construct($name,$prix,$email,$produit,$adress,$phone,$pmode)
	{
		$this->name=$name;
		$this->prix=$prix;
        $this->produit=$produit;
        $this->email=$email;
		$this->adress=$adress;
		$this->phone=$phone;
		$this->pmode=$pmode;
		
	}
	
	public function getName(){return $this->name;}
	public function getPrix(){return $this->prix ;}
	public function getProduit(){return $this->produit;}
	public function getEmail(){return $this->email;}
	public function getAdress(){return $this->adress;}
	public function getPhone(){return $this->phone;}
	public function getPmode(){return $this->pmode;}
	

	public function setName($name){$this->name=$name;}
	public function setPrix($prix){$this->prix=$prix;}
	public function setProduit($produit){$this->produit=$produit;}
	public function setEmail($email){$this->email=$email;}
	public function setAdresse($adress){$this->adress=$adress;}
	public function setPhone($phone){$this->phone=$phone;}
	public function setPmode($pmode){$this->pmode=$pmode;}
	
}
?>