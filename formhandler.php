<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@mail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email: $email.\."
               "Subject: $subject.\n".
               "User Message: $message.\n";


$to = 'umeriqbal394@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: emali \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");


?>