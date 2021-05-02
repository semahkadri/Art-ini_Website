<?php
$link = mysqli_connect("localhost", "root", "", "artini");
$id_prod=$_GET['id_prod'];
$nom_prod=$_GET['nom_prod']; 
$prix_prod=$_GET['prix_prod'];
$img_prod=$_GET['img_prod'];
$id_categorie=$_GET['id_categorie'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE produit SET nom_prod='$nom_prod',prix_prod='$prix_prod',img_prod='$img_prod',id_categorie='$id_categorie' WHERE id_prod='$id_prod' "; 
if(mysqli_query($link, $sql)){ 
    header('location:produitt.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 