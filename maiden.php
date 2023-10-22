<?php
require('connect.php');

$database = "database";
$conn = mysqli_connect("localhost","root","",$database);
$sql="SELECT * FROM `tbl_product` WHERE `subcategory_id`=13";
$result=mysqli_query($conn,$sql)?>


<!DOCTYPE html>
<html>
	<head>
	<title>All Products</title>
	<link rel="stylesheet" type="text/css" href="allproducts.css">
	<link rel="stylesheet" type="text/css" href="homepagenew.css">
	</head>
	<body>
		<nav class="navbar">
<div class="nav">
    <h2>DIVINE FEMININE</h2>
    <div class="nav-items">
       
        <a href="register.php"><img src="feminine/accounticon.jpg" alt=""></a>
        <a style="text-decoration: none; color: black; " href="logout.php">
                    <?php  
                        session_start();
                        echo ($_SESSION['first_name']);  
                        echo ($_SESSION['last_name']); 
                ?>
                </a>

        <a href="cart2.php"><img src="feminine/bagicon.png" alt=""></a>
 
    </div>
</div>
</nav>

<ul class="links-container">
    <li class="link-item"><a href="homepagenew.php" class="link">home</a></li>
    <li class="link-item"><a href="lover.php" class="link">lover</a></li>
    <li class="link-item"><a href="mother.php" class="link">mother</a></li>
    <li class="link-item"><a href="maiden.php" class="link">maiden</a></li>
    <li class="link-item"><a href="mystic.php" class="link">mystic</a></li>
    <li class="link-item"><a href="sage.php" class="link">sage</a></li>
    <li class="link-item"><a href="huntress.php" class="link">huntress</a></li>
    <li class="link-item"><a href="queen.php" class="link">queen</a></li>
</ul>
<hr style="height: 5px; color: black;">
		<div class="container"> 
		<?php 
			while($row = mysqli_fetch_assoc($result)){

			 ?>

<section>
	<div class="row">
<form action="processCart.php" method="post">

	    <img  src="feminine/<?php echo $row['product_image']; ?>" height="250" width="200" ><br>
		<p> <?php echo $row['product_name'] ?> </p><br>
		<p > <?php echo $row['product_description'] ?> </p><br>
		<p ><b><?php echo $row['unit_price']  ?></b></p><br>
		<input value="<?php echo $row['product_id'] ?>" type="number" name="p_id" hidden>
		<input value="<?php echo ($_SESSION['guest_id']) ?>" type="number" name="g_id" hidden>
		<input class="button" value="Add to Cart" type="submit">
	</form>
	</div>
</section>


<?php }

 ?>
</div>
		
	</body>




</html>

