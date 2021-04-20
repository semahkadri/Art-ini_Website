<?php
include "configg.php";


class carteC
{
    public function ajoutercarte($carte){
        $db=config::getConnexion();
        $sql="INSERT INTO carte(numero, Date_activation, Date_expiration,nbptn) VALUES (:numero, :dateAct, :dateExp, 0)";
       
        try{
            
            $req = $db->prepare($sql);
            $numero=$carte->getNumero();
		    $dateAct=$carte->getDateAct();
		    $dateExp=$carte->getDateExp();
		 
		    

            $req->bindValue(':numero',$numero);
	        $req->bindValue(':dateAct',$dateAct);
	        $req->bindValue(':dateExp',$dateExp);
	
			$req->execute();
			
		}
		catch(Exception $e)
		{
			die('404:Error!!');

		}
	}


    function supprimerCarte($Identifiant){
        $db=config::getConnexion();
        $sql="DELETE FROM carte WHERE Identifiant= :Identifiant";
        
        $req=$db->prepare($sql);
		
        $req->bindValue(':Identifiant',$Identifiant);
        try{
            $req->execute();
			return true ;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
    }

public function modifierCarte($id,$numero,$DateAct,$DateExp,$idclient)
{

	$sql="update carte set numero= '$numero', Date_activation='$DateAct', Date_expiration='$DateExp' , idclient='$idclient' where Identifiant='$id'";
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
}
?>