<?php
    include('dbConnect.php');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if(mysqli_num_rows($query) > 0){
            header("location: register.php?error=Username taken");
        }else{
            mysqli_query($conn, "INSERT INTO users (name, surname, username, password) VALUES ('$name','$surname','$username','$password')");
            header('location:login.php');
            exit();   
        }
                
        
    }
?>