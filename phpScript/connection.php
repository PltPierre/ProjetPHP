<?php
    session_start();
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    echo '<script src="../scripts/redirectFunction.js"></script>';
    include("SQLfunctions.php");
    echo 'hola';
    if(getUsername($mail, $password)){
        $_SESSION["isConnected"] = true;
        $_SESSION["mail"] = $mail;
        $_SESSION["password"] = $password;
        echo '<script type="text/javascript">redirect("../index.php");</script>';
    }
?>