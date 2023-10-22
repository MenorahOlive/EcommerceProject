
<!DOCTYPE html>
    <html>
        <head>
            <title>admin product images</title>
            <link type="text/css" rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_productimages.php" method="post" enctype="multipart/form-data">
    <h1>Admin Page</h1>

    <p>Add new image</p>

    <label ><b>product image id</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter product image id" name="productimage_id" required><br><br>

    <label for="file_upload"><b>product image</b></label><br><br>
    <input id="file_upload" class="button" type="file" placeholder="Enter product image" name="product_image" required><br><br>

    <label ><b>product id</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter product id" name="product_id" required><br><br>

    <label ><b>created at</b></label><br><br>
    <input class="l1" type="datetime-local" placeholder="Enter time created" name="created_at" required><br><br>

    <label ><b>updated at</b></label><br><br>
    <input class="l1" type="datetime-local" placeholder="Enter time updated" name="updated_at" required><br><br>

    <label ><b>added by</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter user id" name="added_by" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="number" placeholder="is deleted" name="is_deleted" required><br><br>
    
    <input type="submit" id = "submit2" name="submit2" value="Add" class="button">
    
       
    </form>
    </body>
    </html>