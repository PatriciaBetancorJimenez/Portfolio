<?php


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];



    $mailTo="brujix_999@hotmail.com";
    $header="From: ".$mailFrom;
    $txt="You have received an email from ".$name.".\n\n".$message;

    mail($mailTo,$header,$txt);
    header("Location: index.html?mailsend");
}

?>