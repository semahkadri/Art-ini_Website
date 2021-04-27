
<?php 
include_once "../../Model/client.php";
include_once "../../Controller/clientC.php";

include "PHPMailer-master/PHPMailerAutoload.php";
session_start(); 

if (isset($_POST['id']) && isset($_POST['password']) && isset($_POST['date']) && isset($_POST['mail'])
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
	  function verif_Num($str){
		// On cherche tt les caractères autre que [A-Za-z] ou [0-9]
		preg_match("/([^0-9\s])/",$str,$result);
		// si on trouve des caractère autre que A-Za-z ou 0-9
		if(!empty($result)){
		  return false;
		}
		return true;
	  }
	  
		/*$today= date("Y-m-d");
		$diff= date_diff (date_create($date),date_create($today));
		$age=$diff->format('%y') ;*/
	 
	$id = validate($_POST['id']);
	$pass = validate($_POST['password']);
    $date= validate($_POST['date']);
    $maile= validate($_POST['mail']);
	$re_pass = validate($_POST['re_password']);
	$name =validate($_POST['name']);
	$image =$_POST['image'];
	$captcha=$_POST['captcha_challenge'];

	$user_data = 'id='. $id. '&name='. $name;



	if (empty($id)) 
	{
		header("Location: signup.php?error=Identifiant est obligatoire&$user_data");
	    exit();
	}
	else if(!verif_alpha($name))
	{
	header("Location: signup.php.php?error=Caractères invalids");
	exit();

	}
	else if(!verif_alphaNum($id))
	{
	header("Location: signup.php.php?error=Caractères invalids");
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
	
    else if (empty($maile)) 
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
	else if(strpos($maile,"@")==false || strpos($maile,".")==false)
	{
		header("Location: signup.php?error=Adresse e-mail non valide&$user_data");
	    exit();
	}
	else if(empty($captcha))
	{
		header("Location: signup.php?error=Captcha obligatoire&$user_data");
	    exit();
	}
	else if ($captcha !== $_SESSION['captcha_text'])
	{
		header("Location: signup.php?error=Captcha incorrecte&$user_data");
	    exit();
	}
	

	else
	{	 
		$pass = md5($pass);
		$cliC= new clientC();
		$cli=new Client($id,$image,$name,$pass,$maile,$_POST['date'],null,null);
		$cliC->ajouterClient($cli);
		
	         

			 $mailto = $_POST['mail'];
			 $mailSub = 'Artini';
			 //$mailMsg = ' confirmer votre email <a href=\"localhost/front/views/index.php\"> ';
			 $idm=$_POST['id'];
			 $mailMsg = "Bonjour ".$name." clickez sur <a href=\"localhost/Artini/Views/Front/verification.php?var=".$id."\">le lien</a> pour confirmer votre compte";
		 
			$mail = new PHPMailer();
			$mail ->IsSmtp();
			$mail ->SMTPDebug = 0;
			$mail ->SMTPAuth = true;
			$mail ->SMTPSecure = 'ssl';
			$mail ->Host = "smtp.gmail.com";
			$mail ->Port = 465; // or 587
			$mail ->IsHTML(true);
			$mail ->Username = 'Artiniprojet@gmail.com';
			$mail ->Password = "artini123";
			$mail ->SetFrom($_POST['mail']);
			$mail ->Subject = $mailSub;
			$mail ->Body = $mailMsg;
			$mail ->AddAddress($mailto);
			$mail->Send();	 
			header("Location: signup.php?success=Votre compte a été créé avec succès! Consultez votre boite mail pour l'activer .");
			exit();
	}
	
}else{
	header("Location: signup.php");
	exit();
}
?>


