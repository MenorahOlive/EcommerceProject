<!DOCTYPE html>
<html>
  <head>
    <title>Display Guests</title>
    <link rel="stylesheet" type="text/css" href="user_select.css">
  </head>
<body>

<table class=table border ="1" cellspacing="0" cellpadding="10">
  <thead>
    
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Action</th>
  </thead>
<tbody>

<?php
  require('connect.php');

  $sql = "SELECT * FROM `myguests` ";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<tr>
          <td>".$row["first_name"]."</td>
          <td>".$row["last_name"] ."</td>
          <td>".$row["email"]."</td>";
          

        
         echo "<td> 
    <form action=\"editGuest.php\" method=\"post\">
        <input type=\"number\" name=\"guest\" value=\"".$row["guest_id"]."\" hidden>
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