<?php
require("connect.php");
session_start();
$email = $_POST['email'];
$pass = $_POST["password"];

$sql = "SELECT * FROM myguests where email = '$email' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
        password_verify($pass,$row['password']);
        session_start();
        $_SESSION['guest_id'] = $row['guest_id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];

        $_SESSION['email'] = $email;
        header('Location: homepagenew.php');
       
        
        echo "\nLogin Successful";
    }else{
        echo "\nUnsucessful";
        header('Location: login.php');
    
}

?> 
