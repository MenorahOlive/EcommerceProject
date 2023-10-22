
<!DOCTYPE html>
    <html>
        <head>
            <title>admin users</title>
            <link rel="stylesheet" href="loginstyle.css">
        </head>
        <body>
<div class="container">
    <form action="process_users.php" method="post">
    <h1>Admin Page</h1>

    <p>Add new user</p>

    <label ><b>user id</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter user id" name="user_id" required><br><br>

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

    <label ><b>role</b></label><br><br>
    <input class="l1" type="number" placeholder="Enter role id" name="role_id" required><br><br>

    <label ><b>is deleted</b></label><br><br>
    <input class="l1" type="text" placeholder="is deleted" name="is_deleted" required><br><br>
    
    <input type="submit" id = "submit2" name="submit2" value="Add" class="button">
    
       
    </form>
    </body>
    </html>