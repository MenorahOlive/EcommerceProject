<?php
require("connect.php");


$pid=$_POST["prodID"];
$productName=$_POST["product_name"];
$productDescription=$_POST["product_description"];
$productImage=$_FILES['product_image']["name"];
$unitPrice=$_POST["unit_price"];
$availableQuantity=$_POST["available_quantity"];
$subcategoryName=$_POST["subcategory_name"];
$createdAt=$_POST["created_at"];
$updatedAt=$_POST["updated_at"];
$addedBy=$_POST["added_by"];
$isDeleted=$_POST["is_deleted"];

//print_r($_FILES['product_image']);


$destination ="feminine/".basename($_FILES['product_image']["name"]);

$categoryid ="SELECT * FROM `tbl_subcategories` WHERE subcategory_name =?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $categoryid)){
	echo "error detected";
	exit();
}
else{
	mysqli_stmt_bind_param($stmt,"s", $subcategoryName);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	if($row=mysqli_fetch_assoc($result)){
	$subcategory_id=(int) $row['subcategory_id'];
	}
}



$sql ="UPDATE tbl_product 
            SET product_name = '$productName',
                product_description = '$productDescription',
                product_image = '$productImage',
                unit_price = '$unitPrice',
                available_quantity = '$availableQuantity',
                subcategory_id ='$subcategory_id',
                created_at = '$createdAt',
                updated_at = '$updatedAt',
                added_by = '$addedBy',
                is_deleted = '$isDeleted'
                
            WHERE product_id  = '$pid'";

if(mysqli_query($conn, $sql)===TRUE){
	move_uploaded_file($_FILES['product_image']["tmp_name"], $destination);
	echo "\nRecord updated successfully";
	header("Location: product_select.php");

}else{
	echo "Error:".$sql."<br>".msqli_error($conn);
}
msqli_close($conn);


?>