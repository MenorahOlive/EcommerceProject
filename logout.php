<!DOCTYPE html>
	<html>
		<head>
			<title>Login Out</title>
			<link rel="stylesheet" href="loginstyle.css">
		</head>
		<body>
<div class="container">
	
	
	<h1>Logout</h1>

	<p>Thankyou for Shopping with us!</p>
	<span>
                    <?php  
                        session_start();
                        echo ($_SESSION['first_name']);  
                        echo ($_SESSION['last_name']); 
                ?>
                </span></a>


	<button style="text-align: center;" class="button"><a href="process_logout.php">Click To logout</a></button><br><br>
	

	</form>
	</body>
	</html>
	
