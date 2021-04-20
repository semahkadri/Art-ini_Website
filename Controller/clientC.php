<?php
require_once "configg.php";

class clientC
{
  
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

	$sql="update users set name= '$name', phone='$phone', birthday='$birthday', email='$email' where id='$id'";
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

	$sql="update users set adress= '$adress' where id='$id'";
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

	$sql="update users set password='$password' where id='$id'";
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

        $sql="select * from users where id='$search' OR name='$search' OR uname='$search'";

        $db = config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
			$query->execute([
				'id' => $search
			]);
            return $query->fetch();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }










public function exist()
	{
        $db=config::getConnexion();
		$req=$db->prepare('SELECT * FROM users WHERE uname=:uname');
		$req->bindValue(':uname',$this->uname);
		$req->execute();
		if ($req->rowCount()==0)
			return false;
		$client=$req->fetch();
		if ($client['password']!=$this->password)
			return false;
		return true;
	}
}

 /*function ajouterClient($client){
        $db=config::getConnexion();
        $sql="INSERT INTO users(name, uname, password, email, birthday) VALUES (:name,:uname, :password, :email, :birthday)";
        $id_client=$client->getId_client();
        $sql2="INSERT INTO carte(nb points, id user) values ( '$id_client',0)";
        try{
            
            $req = $db->prepare($sql);
            $req->bindValue(':name',$this->name);
	        $req->bindValue(':email',$this->email);
	        $req->bindValue(':password',$this->password);
	        $req->bindValue(':uname',$this->uname);
	        $req->bindValue(':birthday',$this->birthday);
			$req->bindValue(':adress',$this->adress);
			$req->bindValue(':phone',$this->phone);
			$req->execute();
			
		}
		catch(Exception $e)
		{
			die('404:client exist!!!');

		}
	}*/

?>