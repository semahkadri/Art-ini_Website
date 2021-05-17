<?php
include "configg.php";

class commandeC
{
  
	/*public function ajouterCommande($commande)
 {
        $db=config::getConnexion();
        $sql="INSERT INTO commande(name,prix,produit,email,adress,phone,pmode) VALUES (:name, :prix, :produit, :email, :adress, :phone,:pmode)";
       
        try{
			
            $req = $db->prepare($sql);
			
            $name=$commande->getName();
            $prix=$commande->getPrix();
            $produit=$commande->getProduit();
            $email=$commande->getEmail();
            $adress=$commande->getAdress();
            $phone=$commande->getPhone();
            $pmode=$commande->getPmode();

			$req->bindValue(':name',$name);
            $req->bindValue(':prix',$prix);
            $req->bindValue(':produit',$produit);
            $req->bindValue(':email',$email);
            $req->bindValue(':adress',$adress);
            $req->bindValue(':phone',$phone);
            $req->bindValue(':pmode',$pmode);
			$req->execute();
			
			
		} 
		catch(Exception $e)
		{
			die('404:Error');

		}
	}
  


public function modifierCommande($id,$name,$phone,$email,$produit)
{

	$sql="UPDATE commande SET name= '$name', phone='$phone', produit='$produit', email='$email' WHERE id='$id'";
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

public function modifierCommande2($id,$adress)
{

	$sql="UPDATE commande SET adress= '$adress' WHERE id='$id'";
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

public function modifierCommande3($id,$pmode)
{

	$sql="UPDATE commande SET pmode='$pmode' WHERE id='$id'";
	$db = config::getConnexion();
	try
	{
		$db->query($sql);
	}
	catch (Exception $e)
	{
		die('Erreur: '.$e->getMessage());
	}
}*/
public function supprimerCommande($id){
    $db=config::getConnexion();
    $sql="DELETE FROM orders WHERE id= :id";
    
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
function afficherCommande($search)
    {

        $sql="SELECT * FROM orders WHERE name='$search'";

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





	function afficherCommandetri($cc)
    {
        
        $sql="SELECT* FROM orders ORDER BY $cc ASC";

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