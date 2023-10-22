<?php
$servername="localhost";
$username="root";
$password="";
$database="database";

$conn=mysqli_connect($servername, $username, $password, $database);
$select=mysqli_query($conn, "SELECT * FROM tbl_categories");


?>
<!DOCTYPE html>
    <html>
        <head>
            <title>admin products page</title>
            <link type="text/css" rel="stylesheet" href="loginstyle.css?v=<?php echo time()?>">
        </head>
        <body>
<div class="container">
    <form action="process_product_test.php" method="post" enctype="multipart/form-data">
    <h1>Admin Page</h1>

    <p>Add new products</p>

    <label ><b>product id</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter product id" name="product_id" required><br><br>

    <label ><b>product name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter category" name="product_name" required><br><br>
    
    <label ><b>product description</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter product description" name="product_description" required><br><br>

    <label for="file_image" ><b>product image</b></label><br><br>
    <input class="button" type="file" placeholder="Enter product image" name="product_image" required><br><br>

    <label ><b>unit price</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter unit price" name="unit_price" required><br><br>

    <label ><b>available quantity</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter available quantity" name="available_quantity" required><br><br>

    <label ><b>category</b></label><br><br>
    <select name="category_name">
        <?php 
        while($row=mysqli_fetch_array($select)){
        ?>
    <option value="<?php echo $row['category_name']; ?> "><?php echo $row['category_name']; ?></option>
    <?php }
    ?>
</select>

    <label ><b>created at</b></label><br><br>
    <input class="l1" type="datetime-local" placeholder="YYYY-MM-DD HH:MI:SS" name="created_at" required><br><br>

    <label ><b>updated at</b></label><br><br>
    <input class="l1" type="datetime-local" placeholder="YYYY-MM-DD HH:MI:SS" name="updated_at" required><br><br>

    <label ><b>added by</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter user id" name="added_by" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>

    <input type="submit" id = "submit3" name="submit3" value="Add" class="button">

    
       
    </form>
    </body>
    </html>