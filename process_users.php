<?php
require("connect.php");


$userId=$_POST["user_id"];
$firstName=$_POST["first_name"];
$lastName=$_POST["last_name"];
$isEmail=$_POST["email"];
$pass=$_POST["password"];
$isGender=$_POST["gender"];
$roleId=$_POST["role_id"];
$isDeleted=$_POST["is_deleted"];



$sql = "INSERT INTO tbl_users(user_id, first_name, last_name, email, password, gender, role, is_deleted) VALUES('$userId','$firstName','$lastName', '$isEmail' , '$pass','$isGender', '$roleId', '$isDeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
	
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>