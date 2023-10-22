<!DOCTYPE html>
	<html>
		<head>
			<title>Register</title>
			<link rel="stylesheet" href="loginstyle.css">
		</head>
		<body>
<div class="container">
	<form action="process_register.php" method="post">
	<h1>Register</h1>
	<p>Don't have an account? Create one.</p>


	<label ><b>First Name</b></label><br><br>
	<input class="l1" type="text" placeholder="Enter First Name" name="user_firstname" required><br><br>

	<label ><b>Last Name</b></label><br><br>
	<input class="l1" type="text" placeholder="Enter Last Name" name="user_lastname" required><br><br>

	<label ><b>Email</b></label><br><br>
	<input class="l1" type="text" placeholder="Enter Email" name="user_email" required><br><br>

	<label ><b>Password</b></label><br><br>
	<input class="l1" type="Password" placeholder="Enter Password" name="user_password" required><br><br>

	<label ><b>Confirm Password</b></label><br><br>
	<input class="l1" type="Password" placeholder="Confirm Password" name="user_password" required><br><br>

	<input type="submit" id = "submit" name="submit" value="Create Account" class="button">
	<br>
	<br>
	<br>
    <fieldset>
    	<p>Already have an account?</p>

	<p style="text-align: center;"class=button><a href="login.php">Click to login</a></p>
    </fieldset>
	






	
	
		
	</form>
    </div>
	</body>
	</html>