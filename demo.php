<!DOCTYPE html>
<html>
  <head>
    <title>Display Users</title>
    <link rel="stylesheet" type="text/css" href="user_select.css">
  </head>
<body>

<table class=table border ="1" cellspacing="0" cellpadding="10">
  <thead>
    <th></th>
    <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
  </thead>
<tbody>

<?php
require_once("user_select_process.php");
$query = "SELECT user_id, first_name, last_name, email, gender FROM tbl_users";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  $data=1;
  while($value = mysqli_fetch_assoc($result)) {
 ?>

 <tr>
    <td><?php echo $data; ?></td>
    <td> <?php echo $value ["user_id"] ?></td>
    <td> <?php echo $value ["first_name"] ?></td>
    <td> <?php echo $value ["last_name"] ?></td>
    <td> <?php echo $value ["email"] ?></td>
    <td> <?php echo $value ["gender"] ?></td>>
    <td><button class="button"><a href="user_select_process.php" edit="<?php echo $value["user_id"]?>">edit</a></button></td>

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

