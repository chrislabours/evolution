<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "mail@mail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}


?>