<?php
require("connect.php");


$subcategoryId=$_POST["subcategory_id"];
$subcategoryName=$_POST["subcategory_name"];
$scategory=$_POST["category_id"];
$isdeleted=$_POST["is_deleted"];




$sql = "INSERT INTO tbl_subcategories (subcategory_id, subcategory_name, category, is_deleted) VALUES('$subcategoryId','$subcategoryName','$scategory', '$isdeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>