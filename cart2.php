<?php 

require ('connect.php');

$sql_cart= "SELECT * FROM tbl_cart;";
$all_cart = $conn->query($sql_cart);
$subtotal = 0;

?>

<!DOCTYPE html>
<html>
	<head>
	<title>All Products</title>
	<link rel="stylesheet" type="text/css" href="allproducts.css">
	<link rel="stylesheet" type="text/css" href="homepagenew.css">
	<link rel="stylesheet" type="text/css" href="user_select.css">
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

        <a href="cart.php"><img src="feminine/bagicon.png" alt="">
        	<?php echo mysqli_num_rows($all_cart);?>

        </a>

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


		<!--<a href="cart.php">Cart <span>
			<?php echo mysqli_num_rows($all_cart);?>
		</span></a>-->

		  <h1 style="text-align:center;">CART</h1>

			<table class=table border ="1" cellspacing="0" cellpadding="10">
				<thead>
				<th>Product Image</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Remove from Cart</th>

			</thead>
			<tbody>
				<?php 
			while($row_cart = mysqli_fetch_assoc($all_cart)){
			$sql=" SELECT * FROM tbl_product WHERE product_id=".$row_cart["product_id"];
			
			$all_product=$conn->query($sql);
			while($value = mysqli_fetch_assoc($all_product)){
				echo "<tr>";
            	echo "<td> <img src= \"feminine/". $value["product_image"]."\"width=\"100\" height=\"90\"></td>";
            	echo "<td>". $value["product_name"]."</td>";
            	echo "<td>". $value["unit_price"]."</td>";
                echo "<td>". "<input class=\"cart-num\" id = \"quantity\" type=\"number\" name=\"quantity\" value=\"1\">"."</td>";
                //echo $value["entryNo"];
            	echo "<td> <form action=\"removeFromCart.php\" method=\"post\">
				<input type=\"number\" name=\"entry\" value=\" \" hidden>
				<input class=\"button\" type=\"submit\" value=\"X\">
				</form> </td>";
            	echo "</tr>";
            	     
                    //$grand_total = 0;
            	//$total_price = number_format($value['unit_price'] * $value['quantity']);
            //$grand_total = $total += $total_price;
				$subtotal += $value["unit_price"];
			}}

			 ?>
			</tbody>
		</table>
		<br><br>
		     <h3>Subtotal:<?php echo $subtotal;?><h3><br>
			<form action="submitOrder.php" method="post">
				<input type="number" name="uid" value="<?php echo $_SESSION['guest_id']?>" hidden>
				<input id = "item-quantity" type= "number" name="quantity" value="1" hidden>
				<input class="button" type="submit" value="Order">
			</form>
        

	</main>

	

</body>
</html>