<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'admin@gmail.com' && $password == 'admin1234') {
        header("Location: home.html");
    } else {
       $message = "Error: Email or Password is incorrect";
       header("Location: auth.php?error=" . urlencode($message));
    }
?>