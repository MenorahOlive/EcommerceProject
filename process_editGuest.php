<?php
require("connect.php");

$gid=$_POST["guestID"];

$firstName=$_POST["first_name"];
$lastName=$_POST["last_name"];
$isEmail=$_POST["email"];



$sql = "UPDATE myguests 
		SET 
		 first_name= '$firstName',
		 last_name = '$lastName',
		 email = '$isEmail'
		WHERE guest_id  = '$gid'";


if(mysqli_query($conn, $sql)){
	echo "\nRecord updated successfully";
	header("Location: guest_select.php");
	
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>