<?php

if(isset($_POST['your-name'])&& isset($_POST['your-email'])&& isset($_POST['your-subject'])&& isset($_POST['your-message']))
{
$to='arundas.mec@gmail.com';
$name=$_POST['your-name'];
$email=$_POST['your-email'];
$subject=$_POST['your-subject'];
$message=$_POST['your-message'];
$headers = 'From: '.$email."\r\n" .
    'Reply-To: '.$to. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject."-".$email, $message, $headers);
}
?>