<?php
    $email = $_POST['email'];
    $wallet = $_POST['wallet'];
    $twitter = $_POST['twitter']; 
    $discord = $_POST['discord'];
    $message = $_POST['message'];

    $mailheader = "from:".$email."<".$twitter.">\r\n";

    $recipient = "trobulturtlez@gmail.com";

    mail($recipient, $email, $wallet, $twitter, $discord, $message, $mailheader)
    or die("Error");

    echo'
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>success</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <div class="container">
        <h1>Your form has been recorded</h1>
        <p>await next instruction <a href="index.html">Home</a></p>
    </div>
    <div class="center">
        <img src="/images/ninja4.png" alt="">
    </div>
</body>
</html>
    
    
    ';

?>