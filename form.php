<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$text=$_POST['text'];

$to='patriciabetancorjimenez@gmail.com';
$subject='New message from Portfolio';
$body='This is an automated message. Do not reply';
mail($to,$subject,$body);
echo 'Message sent'
?>