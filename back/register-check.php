<?php 
include "../../config.php";
session_start(); 

if (isset($_POST['password']) && isset($_POST['mail'])
    && isset($_POST['name']) && isset($_POST['re_password'])) 
{
	function validate($data)
	{
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$pass = validate($_POST['password']);
    
    $mail= validate($_POST['mail']);
	$re_pass = validate($_POST['re_password']);
	$name =validate($_POST['name']);
	$image=$_POST['image'];
	$user_data = 'name='. $name;

	if (empty($name)) 
	{
		header("Location: register.php?error=Nom d'utilisateur est obligatoire&$user_data");
	    exit();
	}
	else if(empty($pass))
	{
        header("Location: register.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	
	}
	else if(empty($re_pass))
	{
        header("Location: register.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	}
	
    else if (empty($mail)) 
	{
		header("Location: register.php?error=Adresse e-mail obligatoire&$user_data");
	    exit();
	}
	
	else if($pass !== $re_pass)
	{
        header("Location: register.php?error=Le mot de passe de confirmation ne correspond pas&$user_data");
	    exit();
	}
	else if(strlen($pass)<6)
	{
	header("Location: register.php?error=Mot de passe court&$user_data");
	exit();

	}
	else if(strpos($mail,"@")==false || strpos($mail,".")==false)
	{
		header("Location: register.php?error=Adresse e-mail non valide&$user_data");
	    exit();
	}
	else
	{	 
		$pass = md5($pass);
		$sql = "SELECT * FROM  admin WHERE name='$name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=Identifiant deja existant essayez un autre&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admin(name, password, email,image) VALUES('$name', '$pass', '$mail', '$image')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: register.php?success=Votre compte a été créé avec succès");
	         exit();
           }else {
	           	header("Location: register.php?error=une erreur inconnue s'est produite&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}
?>


