<?php
require("connect.php");


$roleId=$_POST["role_id"];
$roleName=$_POST["role_name"];
$isDeleted=$_POST["is_deleted"];


$sql = "INSERT INTO tbl_roles(role_id, role_name, is_deleted) VALUES('$roleId','$roleName','$isDeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>