
<!DOCTYPE html>
    <html>
        <head>
            <title>admin roles</title>
            <link rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_role.php" method="post">
    <h1>Admin Page</h1>

    <p>Add new role</p>

    <label ><b>role id</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter role id" name="role_id" required><br><br>

    <label ><b>role name</b></label><br><br>
    <input class="l1" type="text" placeholder="Enter role name" name="role_name" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>
    
    <input type="submit" id = "submit2" name="submit2" value="Add" class="button">
    
       
    </form>
    </body>
    </html>