<!DOCTYPE html>
    <html>
        <head>
            <title>admin categories</title>
            <link rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_category.php" method="post">
    <h1>Admin Page</h1>

    <p>Add new categories</p>

     <label ><b>category id</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter category id" name="category_id" required><br><br>

    <label ><b>category name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter category " name="category_name" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>
    
    <input type="submit" id = "submit1" name="submit1" value="Add" class="button">

    </form>
    </body>
    </html>