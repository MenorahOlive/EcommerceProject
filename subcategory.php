
<!DOCTYPE html>
    <html>
        <head>
            <title>admin sub categories</title>
            <link rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_subcategory.php" method="post">
    <h1>Admin Page</h1>

    <p>Add new sub-categories</p>

    <label ><b>sub-category id</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter category id" name="subcategory_id" required><br><br>

    <label ><b>sub-category name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter sub-category" name="subcategory_name" required><br><br>

    <label ><b>category id</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter category id" name="category_id" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>
    
    <input type="submit" id = "submit2" name="submit2" value="Add" class="button">
    
       
    </form>
    </body>
    </html>