<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'houriachafiq@outlook.com';
$email_subject ='contact form test';
$email_body = "User name : $name . \n " . "User e-mail $email . \n " . "User message : $message .\n ";


$to = 'houriachafiq@gmail.com';
$headers = "form : $email_from \r\n ";
$headers .= "Reply-to : $email \r\n";
mail($to, $email_subject,$email_body,$headers);
// header('Location: index.html');
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contact.css">
    <title>Message is sent</title>
</head>
<body>
    <h1>Your <br>message <br>is sent</h1>
</body>
</html>
