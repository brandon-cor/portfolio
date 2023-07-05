<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = '15brandon51@gmail.com';
$headers = "From: $email";

mail($to, $subject, $message, $headers);
?>
