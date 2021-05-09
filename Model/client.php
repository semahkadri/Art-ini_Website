<?php

class Client

{   private ?int $id=null;
	private ?string $login;
	private ?string $image ;
	private ?string $name ;
	private ?string $password;
	private ?string $email;
	private ?string $birthday;
	private ?string $adress;
	private ?int $phone;
	

	public function __construct($login,$image,$name,$password,$email,$birthday,$adress,$phone)
	{
		$this->name=$name;
		$this->login=$login;
        $this->birthday=$birthday;
        $this->email=$email;
        $this->password=$password;
		$this->adress=$adress;
		$this->phone=$phone;
		$this->image=$image;
		
	}
	
	public function getName(){return $this->name;}
	public function getLogin(){return $this->login ;}
	public function getBirthday(){return $this->birthday;}
	public function getEmail(){return $this->email;}
	public function getPassword(){return $this->password;}
	public function getAdress(){return $this->adress;}
	public function getPhone(){return $this->phone;}
	public function getImage(){return $this->image;}
	

	public function setName($name){$this->name=$name;}
	public function setlogin($login){$this->login=$login;}
	public function setBirthday($birthday){$this->birthday=$birthday;}
	public function setEmail($email){$this->email=$email;}
	public function setPassword($password){$this->password=$password;}
	public function setAdresse($adress){$this->adress=$adress;}
	public function setPhone($phone){$this->phone=$phone;}
	public function setImage($image){$this->image=$image;}
	
}
?>