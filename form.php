<?php
if(isset($_POST['submit'])){
 $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'portfolio@domain.com';

	$email_subject = 'Message from ' .$email;

	$email_body = 'You have received a new message from the user' .$name;
                            'Here is the message:' .$message;

  $to = 'brujix_999@hotmail.com';

  

  mail($to,$email_subject,$email_body);
}

?>