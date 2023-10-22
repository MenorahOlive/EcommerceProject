<!DOCTYPE html>
	<html>
		<head>
			<title>Login Out</title>
			<link rel="stylesheet" href="loginstyle.css">
		</head>
		<body>
<div class="container">
	
	
	<h1>Logout</h1>

	<p>Thankyou for choosing us!</p>
	<span>
                    <?php  
                        session_start();
                        echo ($_SESSION['firstName']);  
                        echo ($_SESSION['lastName']); 
                ?>
                </span></a>


	<button style="text-align: center;" class="button"><a href="process_logout2.php">Click To logout</a></button><br><br>
	

	</form>
	</body>
	</html>
	
