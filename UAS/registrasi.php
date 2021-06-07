<?php
require 'function.php';
    if(isset($_POST["register"]) ) {

        if(registrasi($_POST) > 0 ) {
            echo "<script>alert('Selamat Anda Sudah Terdaftar')</script>";
        } 
        else {
            echo mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi</title>
</head>
<link href="css/register.css" rel="stylesheet">
<body>
    <div>
        <img src="images/pupukin_awal.png"style="width: 495px; height: 382px; margin-top: 100px; margin-left: 150px;">
        
    </div>
    <div class="center">
        <h1>Registrasi</h1>
        <form action="" method="post">
        

             <div class="text_field">
                <input type="text" required name="username" id="username">
                <span></span>
                <label>Username</label>
                
            </div>
             <div class="text_field">
                <input type="text" required name="alamat" id="alamat">
                <span></span>
                <label>Alamat</label>
            </div>
            <div class="text_field">
                <input type="Email" required name="email" id="email">
                <span></span>
                <label>Email</label>
            </div>
            <div class="text_field">
                <input type="password" required name="password" id="password">
                <span></span>
                <label>Password</label>
            </div>
           
            <input type="submit" value="Register" id="register" name="register">
            
            <div class="signup_link">
                <a href="login.php">Kembali</a>
                
            </div>
            
        </form>
    </div>
</body>