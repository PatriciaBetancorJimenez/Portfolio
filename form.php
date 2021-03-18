<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$text=$_POST['text'];

$email_from='Portfolio';
$email_subject='New message from Portfolio';
$email_body='Username: $fullname.\n'.
'Visitor e-mail: $email.\n'.
'Visitor message: $text.\n';

$to='patriciabetancorjimenez@gmail.com';

mail($to,$email_from,$email_subject,$email_body);

?>