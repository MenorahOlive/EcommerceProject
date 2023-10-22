<?php
require("connect.php");


$categoryId=$_POST["category_id"];
$categoryName=$_POST["category_name"];
$isDeleted=$_POST["is_deleted"];


$sql = "INSERT INTO tbl_categories(category_id, category_name, is_deleted) VALUES('$categoryId','$categoryName','$isDeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>