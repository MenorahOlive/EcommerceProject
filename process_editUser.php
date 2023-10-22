<?php
require("connect.php");

$uid=$_POST["userID"];

$firstName=$_POST["first_name"];
$lastName=$_POST["last_name"];
$isEmail=$_POST["email"];
$pass=$_POST["password"];
$isGender=$_POST["gender"];

$isDeleted=$_POST["is_deleted"];




$sql = "UPDATE tbl_users 
		SET 
		 first_name= '$firstName',
		 last_name = '$lastName',
		 email = '$isEmail',
		 password= '$pass',
		 gender = '$isGender',
		
		 is_deleted ='$isDeleted'
		WHERE user_id  = '$uid'";


if(mysqli_query($conn, $sql)){
	echo "\nRecord updated successfully";
	header("Location: user_select.php");
	
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>