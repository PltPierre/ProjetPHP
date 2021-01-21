<?php
    session_start();
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    include("SQLfunctions.php");
    if(getUsername($mail, $password)){
        $_SESSION["isConnected"] = true;
        $_SESSION["mail"] = $mail;
        $_SESSION["password"] = $password;
    }
?>