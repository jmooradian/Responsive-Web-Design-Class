<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];

$content = "From: $name";
$recipient = "jonah.m.mooradian@gmail.com";
$mailheader = "From: $email \r\n";
$subject = "";
mail($recipient, $subject, $mailheader) or die("Error!");
echo "Email sent!";
?>