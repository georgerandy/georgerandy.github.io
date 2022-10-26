<?php
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $wallet = $_POST['wallet'];
        $twitter = $_POST['twitter']; 
        $discordd = $_POST['discordd'];
        $message = $_POST['message'];
        $retweet = $_POST['retweet'];

        $recipient = "george@trobulturtlez.space";
        $mailheader = "From: ".$email;
        $txt = "You have received an e-mail from ".$email.".\n\n".$message;

        mail($recipient, $wallet, $twitter, $discord, $mailheader);
        header("Location: form.html?mailsent");
    }




?>