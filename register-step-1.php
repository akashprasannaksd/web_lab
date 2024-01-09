<?php

    $email = $_POST["email"];
    $name = $_POST["name"];

    session_start();
    if ($email && $name){
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;

        header("Location: password.html");
    }
    else{
        header("Location: index.html");

    }
    exit();

?>