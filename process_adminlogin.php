<?php
require("connect.php");
session_start();
$email = $_POST['email'];
$pass = $_POST["password"];

$sql = "SELECT * FROM tbl_users where email = '$email' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
        password_verify($pass,$row['password']);
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['firstName'] = $row['first_name'];
        $_SESSION['lastName'] = $row['last_name'];

        $_SESSION['email'] = $email;
        header('Location: admin_dashboard.php');
       
        
        echo "\nLogin Successful";
    }else{
        echo "\nUnsucessful";
        header('Location: login.php');
    
}

?> 
