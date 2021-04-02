<?php 


$result="";


if(isset($_POST['submit'])){


require 'phpMailer/PHPMailerAutoload.php';


$mail = new PHPMailer;


$mail->Host='smtp.gmail.com';


$mail->Port=587;


$mail->SMTPAuth=true;


$mail->SMTPSecure='tls';


$mail->Username='patriciabetancorjimenez@gmail.com';


$mail->Password='';


$mail->setFrom($_POST['email'],$_POST['name']);


$mail->addAddress('patriciabetancorjimenez@gmail.com');


$mail->addReplyTo($_POST['email'],$_POST['name']);


$mail->isHTML(true);


$mail->Subject='Form Submission Portfolio:' ;


$mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';


if(!$mail->send()){


$result = "Something went worng. Please try again.";


}


else {


    $result="Thanks" .$_POST['name']. " for contacting us. We'll get back to you soon!";


  }


}


?>