<?php

include_once "../../Controller/clientC.php";
include_once "../../Model/client.php";
include "PHPMailer-master/PHPMailerAutoload.php";
session_start();
$db=config::getConnexion();

//if (exists)
$identifiant=$_POST['lostid'];

$emps=$db->query("SELECT * FROM  users WHERE login='$identifiant'");
           if ($row = $emps->fetch())
		   {
		   	$email=$row['email'];
			$exist=true;
		   }
		   else
		   {
		   	$exist=false;
			$_SESSION['error']="error";
		   }

if ($exist==true)
{
// Generate code
$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
  
function generate_string($input, $strength = 10) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
  
    return $random_string;
}
$string_length = 6;

$codestring = generate_string($permitted_chars, $string_length);
//send email
	
    $mailSub = 'Artini';

	$idm=$_POST['id'];
	$mailMsg = "Bonjour ".$_POST['lostid']." Utiliser ce code pour reinisialiser votre mot de passe :.$codestring. ";
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
   $mail ->SetFrom($email);
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($email);
   $mail->Send();

//add code to table
$empc=$db->query("SELECT * FROM  users WHERE login='$identifiant'");
           while ($row = $empc->fetch())
		    {
 $abc=$db->prepare("UPDATE  users SET code=:code WHERE login='$identifiant' ");
 $abc->bindValue(":code",$codestring);
 $abc->execute();
}
//location:changepass
header('location: changepass.php');
}
else
{
//location: + alert
$_SESSION['erreur']="yes";
header('location: forgot.php');

}

?>