<?php
require("connect.php");


$first_name=$_POST["user_firstname"];
$last_name=$_POST["user_lastname"];
$email=$_POST["user_email"];
$password=$_POST["user_password"];
$confirmPassword=$_POST["user_password"];



$sql = "INSERT INTO myguests (first_name, last_name, email, password, confirmPassword) VALUES('$first_name','$last_name','$email', '$password' , '$confirmPassword')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
	header("Location: login.php");
			die;
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>