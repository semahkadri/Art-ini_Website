<?php

class Client
{   private ?int $id=null;
	private ?string $image ;
	private ?string $name ;
	private ?string $uname;
	private ?string $password;
	private ?string $email;
	private ?string $birthday;
	private ?string $adress;
	private ?int $phone;
	

	public function __construct($name,$uname,$password,$email,$birthday,$adress,$phone)
	{
		$this->name=$name;
		$this->uname=$uname;
        $this->birthday=$birthday;
        $this->email=$email;
        $this->password=$password;
		$this->adress=$adress;
		$this->phone=$phone;
		
	}
	
	public function getName(){return $this->name;}
	public function getUname(){return $this->uname ;}
	public function getBirthday(){return $this->birthday;}
	public function getEmail(){return $this->email;}
	public function getPassword(){return $this->password;}
	public function getAdress(){return $this->adress;}
	public function getPhone(){return $this->phone;}
	

	public function setName($name){$this->name=$name;}
	public function setUname($uname){$this->uname=$uname;}
	public function setBirthday($birthday){$this->birthday=$birthday;}
	public function setEmail($email){$this->email=$email;}
	public function setPassword($password){$this->password=$password;}
	public function setAdresse($adress){$this->adress=$adress;}
	public function setPhone($phone){$this->phone=$phone;}
	
}
?>