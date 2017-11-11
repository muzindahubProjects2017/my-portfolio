<?php
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['message'];

$to = 'lesheyart@gmail.com';
$subject = 'Website Contact Form';
$msg = $name . " " . $email . " " . $message;

mail($to, $subject, $msg);
?>
