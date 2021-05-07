<?php
include "configg.php";


class carteC
{
   public function ajoutercarte($carte){
        $db=config::getConnexion();
        $sql="INSERT INTO carte(numero, Date_activation, Date_expiration,nbptn,idclient) VALUES (:numero, :dateAct, :dateExp,0,:idclient)";
       
        try{
            
            $req = $db->prepare($sql);
            $numero=$carte->getNumero();
		    $dateAct=$carte->getDateAct();
		    $dateExp=$carte->getDateExp();
            $idclient=$carte->getIdclient();
		    

            $req->bindValue(':numero',$numero);
	        $req->bindValue(':dateAct',$dateAct);
	        $req->bindValue(':dateExp',$dateExp);
            $req->bindValue(':idclient',$idclient);
			$req->execute();
            return $db->lastInsertId();
			
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());

		}
	}


    function supprimerCarte($idclient){
        $db=config::getConnexion();
        $sql="DELETE FROM carte WHERE idclient= :idclient";
        
        $req=$db->prepare($sql);
		
        $req->bindValue(':idclient',$idclient);
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

	$sql="UPDATE carte set numero= '$numero', Date_activation='$DateAct', Date_expiration='$DateExp' , idclient='$idclient' WHERE Identifiant='$id'";
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

public function modifierCarte1($id,$numero,$DateAct,$DateExp)
{

	$sql="UPDATE carte set numero= '$numero', Date_activation='$DateAct', Date_expiration='$DateExp' WHERE Identifiant='$id'";
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
function modifierCarteFid($idclient)
    {
       
        $sql="UPDATE carte SET  nbptn=nbptn+10 WHERE idclient=:id";
        $db = config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
            $query->execute(['id' =>$idclient ]);
            
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

    }

	function afficherCarte()
    {

        $sql="select * from carte ";

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

    function affichercartetri($cc)
    {
        
        $sql="SELECT * FROM carte ORDER BY $cc ASC";

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

    public function affichercarte1($idclient,$cc) {
       
        $sname= "localhost";
        $unmae= "root";
        $password = "";
        $db_name = "gestioncc";
        $conn = mysqli_connect($sname, $unmae, $password, $db_name);
        if (!$conn) {
            echo "Connection failed!";
        }
        $sql = "SELECT * FROM carte WHERE idclient='$idclient'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            return $row[$cc];
        }
        else
        return false ;
    }
    
}
?>