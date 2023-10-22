<?php
require('connect.php');
session_start();
print_r($_POST);


$uid = 	$_SESSION['uid'];

$quantity = 	$_POST['quantity'];
$product = 	$_POST['product'];

$total = 	$_POST['total'];

$sql="INSERT INTO `tbl_orders`(`guest_id`, `product_id`, `quantity`, `price`) VALUES ('$uid','$product','$quantity','$total')";

if(mysqli_query($conn, $sql)===TRUE){
	
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}




?>