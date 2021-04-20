<?php 
session_start(); 
include "../../config.php";

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($name)) {
		header("Location: login.php?error=Nom d'utilisateur est obligatoire");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Mot de passe est obligatoire");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM admin WHERE name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $pass) {
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['image'] = $row['image'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location:login.php?error=Incorect nom d'utilisateur ou mot de passe");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect nom d'utilisateur ou mot de passe");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}