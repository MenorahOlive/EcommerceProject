<!DOCTYPE html>
	<html>
		<head>
			<title>Login Page</title>
			<link rel="stylesheet" href="loginstyle.css">
		</head>
		<body>
<div class="container">
	<form action="process_login.php" method="post">
	
	<h1>Guest Login</h1>

	<p>Sign in with your email & password</p>


	<label ><b>Email</b></label><br><br>
	<input class="l1" type="text" placeholder="Enter Email" name="email" required><br><br>
	<label ><b>Password</b></label><br><br>
	<input class="l1" type="Password" placeholder="Enter Password" name="password" required><br><br>
	<input type="submit" id = "submit" value="Login" class="button">
	
	
	<button style="text-align: center;" class="button" type="submit"><a href="adminlogin.php">Admin Login -></a></button><br><br>
	

	</form>
	</body>
	</html>
	
