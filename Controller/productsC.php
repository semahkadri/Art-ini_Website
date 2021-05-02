<?PHP
include "../../config.php";

class productsC 
{
	public function ajouterproducts($product)
	{       
		 $db = config::getConnexion();
		 $sql = "INSERT INTO produit (nom_prod,prix_prod,img_prod,id_categorie) values (:nom_prod, :prix_prod, :img_prod, :id_categorie)";
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom_prod', $product->getnom_prod());
            $req->bindValue(':prix_prod', $product->getprix_prod());
			$req->bindValue(':img_prod', $product->getimg_prod());
			$req->bindValue(':id_categorie', $product->getcategorie_prod());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}


	/*public function ajouterproducts($product){
        $db=config::getConnexion();
		$sql = "INSERT INTO produit (nom_prod,prix_prod,img_prod,id_categorie) values (:nom_prod, :prix_prod, :img_prod, :id_categorie)";
       
        try{
            
            $req = $db->prepare($sql);
            $nom_prod=$product->getnom_prod();
		    $prix_prod=$product->getprix_prod();
		    $img_prod=$product->getimg_prod();
            $id_categorie=$product->getcategorie_prod();
		    

            $req->bindValue(':nom_prod',$nom_prod);
	        $req->bindValue(':prix_prod',$prix_prod);
	        $req->bindValue(':img_prod',$img_prod);
            $req->bindValue(':id_categorie',$id_categorie);
			$req->execute();
            return $db->lastInsertId();
			
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());

		}
	}*/
	public function modifierproducts($id_prod,$nom_prod,$img_prod,$id_categorie)
{

	$sql="UPDATE produit set nom_prod= '$nom_prod', img_prod='$img_prod', id_categorie='$id_categorie' where id_categorie='$id_prod'";
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
		function rechercheproducts($str)
	{
			
		$sql = "SELECT * FROM produit  inner join categorie on produit.id_categorie=categorie.id WHERE id_categorie LIKE '".$str."%' OR nom_prod LIKE '".$str."%' 
		or nom_categorie LIKE '".$str."%' or id_prod LIKE '".$str."%' ";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherproducts()
	{
		$sql = "SELECT * from produit inner join categorie on produit.id_categorie=categorie.id";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherproduct()
	{
		$sql = "SELECT * from produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerproducts($nom_prod)
	{
		include "../config.php";
		$sql = "DELETE FROM produit where nom_prod= :nom_prod";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom_prod', $nom_prod);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
	function calculerproducts($id_prod){
		$sql="SELECT * FROM produit where id_prod='$id_prod'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$nombre=$liste->rowCount();
		return $nombre;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherproductstrie($cc)
    {
        
        $sql="select * from produit order by $cc desc";

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
