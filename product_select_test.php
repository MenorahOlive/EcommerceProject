<!DOCTYPE html>
<html>
  <head>
    <title>Display Products</title>
    <link rel="stylesheet" type="text/css" href="user_select.css">
  </head>
<body>

<table class=table border ="1" cellspacing="0" cellpadding="10">
  <thead>
   
    <th></th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Image</th>
    <th>Price</th>
    <th>Available Quantity</th>
    
    <th>Action</th>
  </thead>
<?php
  require('connect.php');

  $sql = "SELECT product_name, product_description, product_image, unit_price, available_quantity FROM tbl_product ";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $data=1;
    while ($value = mysqli_fetch_array($result)) {
      ?>

 <tr>
    <td><?php echo $data; ?></td>
    <td> <?php echo $value ["product_name"] ?></td>
    <td> <?php echo $value ["product_description"] ?></td>
    <td> <?php echo <img style = 'width:100%;' src = 'feminine/".$row[3]."'></td>>
    <td> <?php echo $value ["unit_price"] ?></td>
    <td> <?php echo $value ["available_quantity"] ?></td>
   
    <td><button class="button"><a href="user_select_process.php">edit</a></button></td>

 <tr>
 <?php
  $data++;}} 
  else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
</tbody>
</table>
</body>
</html>

