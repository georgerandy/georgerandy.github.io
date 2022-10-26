<?php
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $wallet = $_POST['wallet'];
        $twitter = $_POST['twitter']; 
        $discord = $_POST['discord'];
        $message = $_POST['message'];
        $retweet = $_POST['retweet'];

        $recipient = "george@trobulturtlez.space";
        $mailheader = "From: ".$email;
        $txt = "You have received an e-mail from ".$email.".\n\n".$message;

        mail($recipient, $email, $wallet, $twitter, $discord, $message, $retweet, $mailheader);
        header("Location: form.html?mailsent");
    }




?>