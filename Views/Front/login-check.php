<?php 
session_start(); 
include "../../config.php";

if (isset($_POST['login']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$login = validate($_POST['login']);
	$pass = validate($_POST['password']);

	if (empty($login)) {
		header("Location: login.php?error=Identifiant est obligatoire");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Mot de passe est obligatoire");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);
		$sql = "SELECT * FROM users WHERE login='$login' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login'] === $login && $row['password'] === $pass && $row['etat']==='verifie') {
            	$_SESSION['login'] = $row['login'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				
				$_SESSION['birthday'] = $row['birthday'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['adress'] = $row['adress'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['image'] = $row['image'];
            	header("Location: welcome.php");
		        exit();
            }
			else if ($row['login'] === $login && $row['password'] === $pass && $row['etat']===''){
				header("Location:login.php?error=Veuillez activer votre compte d'abord");
		        exit();
			}
			else{
				header("Location:login.php?error=Incorect nom d'utilisateur ou mot de passe");
	        exit();
			}
		}else{
			header("Location:login.php?error=Incorect nom d'utilisateur ou mot de passe");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}