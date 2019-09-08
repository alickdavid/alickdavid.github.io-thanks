<?php

if(isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $title = $_POST['title'];
    $message = $_POST ['message'];
    
    $mailTo = "alickdavid76@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $title, $txt, $headers);
    header("Location: thankyou.html?messagesent");
}