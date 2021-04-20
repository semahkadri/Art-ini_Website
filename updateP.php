<?php
$link = mysqli_connect("localhost", "root", "", "artini");
$id_prod=$_GET['id_prod'];
$nom_prod=$_GET['nom_prod']; 
$prix_prod=$_GET['prix_prod'];
$img_prod=$_GET['img_prod'];
$categorie_prod=$_GET['categorie_prod'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE produits SET nom_prod='$nom_prod',prix_prod='$prix_prod',img_prod='$img_prod',categorie_prod='$categorie_prod' WHERE id_prod='$id_prod' "; 
if(mysqli_query($link, $sql)){ 
    header('location:produit.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 