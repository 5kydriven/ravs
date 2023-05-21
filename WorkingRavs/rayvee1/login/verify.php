<?php
include "dbConnect.php";

    if(isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($result) > 0) {
            header("location: user.php");
        } else {
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }
        

    } else {
        header("location: login.php");
        exit();
    }
    
?>