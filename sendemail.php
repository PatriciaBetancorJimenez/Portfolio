<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpMailer/Exception.php';
require_once 'phpMailer/PHPMailer.php';
require_once 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'patriciabetancorjimenez@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Gmailcontrasenna'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('patriciabetancorjimenez@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('patriciabetancorjimenez@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
             
                 <h4>Message Sent! X</h4>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                 
                <h4>'.$e->getMessage().'
              </h4></div>';
  }
}
?>
