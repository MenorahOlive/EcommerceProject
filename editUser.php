<?php
$servername="localhost";
$username="root";
$password="";
$database="database";

session_start();
print_r($_POST);
require("connect.php");

$uid= $_POST["user"];
$sql2 = "SELECT * FROM tbl_users WHERE user_id = '$uid'";

$result2 = mysqli_query($conn,$sql2);

?>





<!DOCTYPE html>
    <html>
        <head>
            <title>admin users</title>
            <link rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_editUser.php" method="post">
    <h1>Admin Page</h1>

    <p>Edit User</p>

    

    <label ><b>first name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter first name" name="first_name" required><br><br>

    <label ><b>last name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter last name" name="last_name" required><br><br>

    <label ><b>email</b></label><br><br>
    <input class="l1" type="email" placeholder="Enter email" name="email" required><br><br>

    <label ><b>password</b></label><br><br>
    <input class="l1" type="password" placeholder="Enter password" name="password" required><br><br>

    <label ><b>gender</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter gender" name="gender" required><br><br>

    

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>

    <?php echo "<input type=\"number\" name=\"userID\" value= \"".$uid."\" hidden>"?>
    
    <input type="submit" id = "submit2" name="submit2" value="Edit" class="button">
    
       
    </form>
    </body>
    </html>