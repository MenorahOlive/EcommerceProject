<?php
require("connect.php");


$productImageId=$_POST["productimage_id"];
$productImage=$_FILES['product_image']['name'];
$productId=$_POST["product_id"];
$createdAt=$_POST["created_at"];
$updatedAt=$_POST["updated_at"];
$addedBy=$_POST["added_by"];
$isDeleted=$_POST["is_deleted"];
print_r($_FILES['product_image']);



$sql = "INSERT INTO tbl_productimages (productimages_id, product_image, product_id, created_at, updated_at, added_by, is_deleted) VALUES('$productImageId','$productImage','$productId', '$createdAt' , '$updatedAt','$addedBy', '$isDeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>