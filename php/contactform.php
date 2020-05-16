<?php

if (isset($_POST['submit'])) {
    // get the data from the contact form
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Work Interest";

    // setting up the email
    $mailTo = "bradysm@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}