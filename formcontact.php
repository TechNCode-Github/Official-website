<?php
$headers = 'From: techncode.ds@gmail.com' . "\r\n" .
'Reply-To: techncode.ds@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
$destinataire = 'techncode.ds@gmail.com';
$user_name = $_POST["user_name"];
$user_mail = $_POST["user_mail"];
$subject = $_POST["sujet"];
$message = $_POST["message"];
mail($destinataire, $subject, $message, $user_name, $user_mail, $headers);
?>