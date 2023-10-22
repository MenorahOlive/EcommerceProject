<!DOCTYPE html>
<html>
  <head>
    <title>Display Products</title>
    <link rel="stylesheet" type="text/css" href="user_select.css">
  </head>
<body>

<table class=table border ="1" cellspacing="0" cellpadding="10">
  <thead>
   
    
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Price</th>
    <th>Available Quantity</th>
    <th>Product Image</th>
    <th>Action</th>
  </thead>
<?php
  require('connect.php');

  $sql = "SELECT * FROM `tbl_product` ";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<tr><td>".$row['product_name']."</td>
          <td>".$row['product_description']."</td>
          <td>".$row['unit_price']."</td>
          <td>".$row['available_quantity']."</td>

          <td style = 'width:10%;'> <img style = 'width:100%;' src = 'feminine/".$row[3]."'>";


         echo "<td> 
    <form action=\"editProduct.php\" method=\"post\">
        <input type=\"number\" name=\"product\" value=\"".$row["product_id"]."\" hidden>
        <input type=\"submit\" value=\"Edit\" class=\"button\">
        </form>
    
    <td>";
      echo "</tr>";
           

          
    }
  }
  else{
    echo "Tables are empty";
    echo "Kindly add something";
  }
  ?>
</table>
</body>
</html>

