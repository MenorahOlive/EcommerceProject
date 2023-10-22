<?php 
require("connect.php");
session_start();
if($_SESSION['guest_id']== "default"){
	echo "<script type='text/javascript'>alert('Kindly Log In to Access Cart')</script>";
	header('Location: login.php');
	exit();
 }
$sql = "SELECT entryNo, u_id, tbl_product.product_id, product_name, product_image, unit_price FROM tbl_cart JOIN tbl_product WHERE tbl_cart.product_id = tbl_product.product_id;";
$userCart = [];
$result = mysqli_query($conn,$sql);
$subtotal = 0;
while($row = mysqli_fetch_assoc($result)){
	if ($row['u_id'] == $_SESSION['guest_id']){
		array_push($userCart, $row);
	}

		
	}
	$_SESSION['orderItems'] = $userCart;
?>

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
                       
                        echo ($_SESSION['first_name']);  
                        echo ($_SESSION['last_name']); 
                ?>
                </a>

        <a href="cart.php"><img src="feminine/bagicon.png" alt=""></a>
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
     		<table>
     		<tbody>
            <?php
            foreach($userCart as $value){
            	echo "<tr>";
            	echo "<td> <img src= \"feminine/". $value["product_image"]."\"width=\"100\" height=\"90\"></td>";
            	echo "<td>". $value["product_name"]."</td>";
            	echo "<td>". $value["unit_price"]."</td>";
                echo "<td>". "<input class=\"cart-num\" id = \"quantity\" type=\"number\" name=\"quantity\" value=\"1\">"."</td>";
            	echo "<td> <form action=\"removeFromCart.php\" method=\"post\">
				<input type=\"submit\" value=\"Remove\">
				</form> </td>";
            	echo "</tr>";
				$subtotal += $value["unit_price"];
            	}
            ?>
            </tbody>
			
            </table>
			<span id="cart-subtotal">Subtotal:<?php echo $subtotal;?><span><br>
			<form action="submitOrder.php" method="post">
				<input type="number" name="uid" value="<?php echo $_SESSION['guest_id']?>" hidden>
				<input id = "item-quantity" type= "number" name="quantity" value="1" hidden>
				<input type="submit" value="Place Order">
			</form>
        </div>
    </div>
</body>
<script>
	document.querySelector("#quantity").addEventListener("change", () => {
	document.querySelector("#item-quantity").value = document.querySelector("#quantity").value
	})
</script>
</html>