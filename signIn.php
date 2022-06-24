<?php
require "connect.php";
$user = null;
if(isset($_POST["signInForm"])){
    $email=$_POST["email"];
    $pw=$_POST["password"];
    $user = query("SELECT * FROM users WHERE email LIKE '$email' AND pw LIKE '$pw'");
    if($user == null);
    echo $email .$pw;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signInStyle.css">
    <script src="https://kit.fontawesome.com/d57f3da380.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script defer src = "script.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Study Inc.</title>
</head>

<body>
    <div class = "header">
        <logo><i class="fa-solid fa-book-open" id = "profile"></i>study Inc.</logo>
    </div>
    <div class = "content">
        <div class = "picture">
            <img src = "assets/studying2.jpg">
        </div>
        <form id = "signInForm" name="signInForm" action="home.php" method="get">
            <h1>Welcome !</h1>
            <br>
            <h2>Sign in to</h2>
            <h3>study inc.</h3>
            <br>
            <h4>Don't have an account?</h4>
            <h4><a href="register.php">Create Account</a></h4>
            <br>
            <div class = "form-content">
                <label>Email</label>
                <input type = "email" placeholder="Enter your email" id = "email" name="email" required>
            </div>
            <div class = "form-content">
                <label>Password</label>
                <input type = "password" placeholder="Enter your Password" id = "password" name="email" required>
            </div>
            <small>Message</small>
            <button class = "submit" type = "submit">Login</button>
        </form>
    </div>
</body>