<!DOCTYPE html>
<html>
  <head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="user_select.css">
  </head>
<body>


<table class=table border ="1" cellspacing="0" cellpadding="10">
  <thead>
   
    
    <th>Order Id</th>
    <th>product_id</th>
    <th>quantity</th>
    
  </thead>
<tbody>

  <?php
  require('connect.php');

  $sql = "SELECT * FROM `order_item` ";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<tr>
          <td>".$row["order_id"]."</td>
          <td>".$row["product_id"] ."</td>
          <td>".$row["quantity"]."</td>";
      

    
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





















