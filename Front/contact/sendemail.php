<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
include_once '../../../config.php';
$mail = new PHPMailer(true);
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

 if(empty($name))
 {
  $alert = '<div class="alert-error">
  <span> Identifiant obligatoire
  </span>
 </div>';
 }else if (empty($email))
 {
  $alert = '<div class="alert-error">
  <span> Adress e-mail obligatoire
  </span>
 </div>';
 }
 else if($email!=$_SESSION['email'])
 {
  $alert = '<div class="alert-error">
  <span> Adress e-mail incorrecte
  </span>
 </div>';
 }
 else if($name!=$_SESSION['login'])
 {
  $alert = '<div class="alert-error">
  <span> Identifiant incorrecte
  </span>
 </div>';

 }
 else{
  try{
    $date = date('y-m-d h:i:s');
    $sql_insert =mysqli_query($conn,"INSERT INTO message(name,email,cr_date) VALUES ('$name','$email','$date')");
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'artiniprojet@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'artini123'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('artiniprojet@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('artiniprojet@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message envoyé! Merci de nous contacter.
                 </span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
 }
  
}

}else{
     header("Location: index.php");
     exit();
}
 ?>

