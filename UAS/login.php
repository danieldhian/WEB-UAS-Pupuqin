<?php
session_start();
require 'function.php';
if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            
            header("location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>
<link href="css/register.css" rel="stylesheet">
<body>
    <div>
        <img src="images/pupukin_awal.png"style="width: 495px; height: 382px; margin-top: 100px; margin-left: 150px;">
        
    </div>
        <div class="center">
            <h1>Login</h1>
            <form  action = "index.php" method="post" name="form">
        
                <div class="text_field">
                    <input type="Email" name="email" id="email">
                    <div id="email_error">Isi Email Terlebih Dahulu</div>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="text_field">
                    <input type="password" name="password" id="password">
                    <div id="pass_error">Isi Password Terlebih Dahulu</div>
                    <span></span>
                    <label>Password</label>
                </div>
                    <input type="submit" value="Login" name="login">
           </form>
            <div class="signup_link">
                <a href="registrasi.php">Registrasi</a>
            </div>
        
        </div>
    
</body>