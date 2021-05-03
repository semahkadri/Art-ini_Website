<?php
include_once "../../Controller/clientC.php";
include_once "../../Model/client.php";
session_start();
$db=config::getConnexion();
$pass=$_POST['newpass'];
$pass = md5($pass);
$identifiant=$_POST['lostid'];
$empc=$db->query("SELECT * FROM  users WHERE login='$identifiant'");
           while ($row = $empc->fetch())
		    {
			if ($_POST['mcode']==$row['code'])
			{
			$code='';
 $abc=$db->prepare("UPDATE  users SET password=:password,code=:code WHERE login='$identifiant' ");
 $abc->bindValue(":password",$pass);
 $abc->bindValue(":code",$code);
 $abc->execute();
 }
}
//location:changepass
header('location: index.php');

?>