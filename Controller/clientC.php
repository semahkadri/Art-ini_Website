<?php
include "configg.php";

class clientC
{
  
	public function ajouterClient($client)
 {
        $db=config::getConnexion();
        $sql="INSERT INTO users(login,image,name,password,email,birthday) VALUES (:login, :image, :name, :password, :email, :birthday)";
       
        try{
			
            $req = $db->prepare($sql);
			$login=$client->getLogin();
            $name=$client->getName();
            $birthday=$client->getBirthday();
            $email=$client->getEmail();
            $password=$client->getPassword();
            $image=$client->getImage();
			$req->bindValue(':login',$login);
            $req->bindValue(':name',$name);
            $req->bindValue(':birthday',$birthday);
            $req->bindValue(':email',$email);
            $req->bindValue(':password',$password);
            $req->bindValue(':image',$image);
			$req->execute();
			
			
		} 
		catch(Exception $e)
		{
			die('404:Error');

		}
	}
    public function supprimerUtilisateur($id){
        $db=config::getConnexion();
        $sql="DELETE FROM users WHERE id= :id";
        
        $req=$db->prepare($sql);
		
        $req->bindValue(':id',$id);
        try{
            $req->execute();
			return true ;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
    }


public function modifierClient1($id,$name,$phone,$email,$birthday)
{

	$sql="UPDATE users SET name= '$name', phone='$phone', birthday='$birthday', email='$email' WHERE id='$id'";
	$db = config::getConnexion();
	try
	{
		$db->query($sql);
	}
	catch (Exception $e)
	{
		die('Erreur: '.$e->getMessage());
	}
}

public function modifierClient2($id,$adress)
{

	$sql="UPDATE users SET adress= '$adress' WHERE id='$id'";
	$db = config::getConnexion();
	try
	{
		$db->query($sql);
	}
	catch (Exception $e)
	{
		die('Erreur: '.$e->getMessage());
	}
}

public function modifierClient3($id,$password)
{

	$sql="UPDATE users SET password='$password' WHERE id='$id'";
	$db = config::getConnexion();
	try
	{
		$db->query($sql);
	}
	catch (Exception $e)
	{
		die('Erreur: '.$e->getMessage());
	}
}
function afficherclientsearch($search)
    {

        $sql="SELECT * FROM users WHERE login='$search'";

        $db = config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
			$query->execute([
				'login' => $search
			]);
            return $query->fetch();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }





	function afficherclienttri($cc)
    {
        
        $sql="SELECT* FROM users ORDER BY $cc ASC";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



}

  


?>