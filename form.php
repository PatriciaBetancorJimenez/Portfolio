<?php

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];


$to = "patriciabetancorjimenez@gmail.com";
$subject = "New e-mail";
$body = "You have received the next e-mail from your website. \n\n $name \n\n $email \n\n $text";

mail($to, $subject, $body);

echo "<body>

<div><h1>Message sent! click <a href='index.html'> here </a> to go back</h1></div>


</body>";

?>