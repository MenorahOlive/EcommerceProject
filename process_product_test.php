<?php
require("connect.php");


$productId=$_POST["product_id"];
$productName=$_POST["product_name"];
$productDescription=$_POST["product_description"];
$productImage=$_FILES['product_image']["name"];
$unitPrice=$_POST["unit_price"];
$availableQuantity=$_POST["available_quantity"];
$categoryName=$_POST["category_name"];
$createdAt=$_POST["created_at"];
$updatedAt=$_POST["updated_at"];
$addedBy=$_POST["added_by"];
$isDeleted=$_POST["is_deleted"];

print_r($_FILES['product_image']);


$categoryid ="SELECT * FROM `tbl_categories` WHERE category_name =?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $categoryid)){
	echo "error detected";
	exit();
}
else{
	mysqli_stmt_bind_param($stmt,"s", $categoryName);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	if($row=mysqli_fetch_assoc($result)){
	$category_id=(int) $row['category_id'];
	}
}

$sql = "INSERT INTO `tbl_product`(`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `subcategory_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES ('$productId','$productName','$productDescription','$productImage','$unitPrice','$availableQuantity','$category_id','$createdAt','$updatedAt','$addedBy','$isDeleted')";

if(mysqli_query($conn, $sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>