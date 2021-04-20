
<?php 
include "../../config.php";
session_start(); 

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['date']) && isset($_POST['mail'])
    && isset($_POST['name']) && isset($_POST['re_password'])&& isset($_POST['image'])) 
{
	function validate($data)
	{
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	function verif_alphaNum($str){
		// On cherche tt les caractères autre que [A-Za-z] ou [0-9]
		preg_match("/([^A-Za-z0-9\s])/",$str,$result);
		// si on trouve des caractère autre que A-Za-z ou 0-9
		if(!empty($result)){
		  return false;
		}
		return true;
	  }
	  function verif_alpha($str){
		// On cherche tt les caractères autre que [A-Za-z] ou [0-9]
		preg_match("/([^A-Za-z\s])/",$str,$result);
		// si on trouve des caractère autre que A-Za-z ou 0-9
		if(!empty($result)){
		  return false;
		}
		return true;
	  }
	  
		$today= date("Y-m-d");
		$diff= date_diff (date_create($date),date_create($today));
		$age=$diff->format('%y') ;
	 
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $date= validate($_POST['date']);
    $mail= validate($_POST['mail']);
	$re_pass = validate($_POST['re_password']);
	$name =validate($_POST['name']);
	$image =$_POST['image'];
	

	$user_data = 'uname='. $uname. '&name='. $name;



	if (empty($uname)) 
	{
		header("Location: signup.php?error=Identifiant est obligatoire&$user_data");
	    exit();
	}
	else if(!verif_alpha($name))
	{
	header("Location: user-personal.php?error=Caractères invalids");
	exit();

	}
	else if(!verif_alphaNum($uname))
	{
	header("Location: user-personal.php?error=Caractères invalids");
	exit();

	}
	else if(empty($pass))
	{
        header("Location: signup.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	
	}
	else if(empty($re_pass))
	{
        header("Location: signup.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	}
    else if(empty($date))
	{
        header("Location: signup.php?error=Date de naissance obligatoire&$user_data");
	    exit();
	}
	
    else if (empty($mail)) 
	{
		header("Location: signup.php?error=Adresse e-mail obligatoire&$user_data");
	    exit();
	}
	
    else if(empty($name))
	{
        header("Location: signup.php?error=Nom & prénom sont obligatoire&$user_data");
	    exit();
	}

	else if($pass !== $re_pass)
	{
        header("Location: signup.php?error=Le mot de passe de confirmation ne correspond pas&$user_data");
	    exit();
	}
	else if(strlen($pass)<6)
	{
	header("Location: signup.php?error=Mot de passe court"&$user_data);
	exit();

	}
	else if(strpos($mail,"@")==false || strpos($mail,".")==false)
	{
		header("Location: signup.php?error=Adresse e-mail non valide&$user_data");
	    exit();
	}
	/*else if($age<18)
		{
		header("Location: signup.php?error=Vous devez avoir au moins 18ans&$user_data");
			exit();
		}*/

	else
	{	 
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE uname='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(image,name, uname, password, email, birthday) VALUES('$image','$name', '$uname', '$pass', '$mail', '$date')";
		   
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Votre compte a été créé avec succès");
	         exit();
           }else {
	           	header("Location: signup.php?error=une erreur inconnue s'est produite&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
?>


