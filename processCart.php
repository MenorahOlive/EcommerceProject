<?php
require('connect.php');
session_start();
print_r($_POST);
$pid = 	$_POST['p_id'];
$gid = 	$_POST['g_id'];

$sql="INSERT INTO `tbl_cart`( `u_id`, `product_id`) VALUES ('$gid','$pid')";

if(mysqli_query($conn, $sql)===TRUE){
	
	echo "New record created successfully";
	header("Location: allproducts.php");
}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}




?>