<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="homepagenew.css">

    </head>
<body>
<nav class="navbar">
<div class="nav">
    <h2>DIVINE FEMININE</h2>
    <div class="nav-items">
        
        <a href="adminlogin.php"><img src="feminine/accounticon.jpg" alt=""></a>
         <a style="text-decoration: none; color: black; " href="logout2.php">
                    <?php  
                        session_start();
                        echo ($_SESSION['firstName']);  
                        echo ($_SESSION['lastName']); 
                ?>
                </a>
        
    </div>
</div>
</nav>

<ul class="links-container">
    <li class="link-item"><a href="allproducts.php" class="link">home</a></li>
    <li class="link-item"><a href="lover.php" class="link">lover</a></li>
    <li class="link-item"><a href="mother.php" class="link">mother</a></li>
    <li class="link-item"><a href="maiden.php" class="link">maiden</a></li>
    <li class="link-item"><a href="mystic.php" class="link">mystic</a></li>
    <li class="link-item"><a href="sage.php" class="link">sage</a></li>
    <li class="link-item"><a href="huntress.php" class="link">huntress</a></li>
    <li class="link-item"><a href="queen.php" class="link">queen</a></li>
</ul>
<br><hr><br>
<footer>
    <div class="footer-content">
        <img src="feminine/logo2.JPEG" class="logo" alt="">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">ADD</li>
                <li><a href="users.php" class="footer-link">admin</a></li>
                <li><a href="role.php" class="footer-link">role</a></li>
                <li><a href="product.php" class="footer-link">product</a></li>
                <li><a href="category.php" class="footer-link">category</a></li>
                <li><a href="subcategory.php" class="footer-link">subcategory</a></li>
                
            </ul>
            <ul class="category">
                <li class="category-title">DISPLAY</li>
                <li><a href="user_select.php" class="footer-link">admin</a></li>
                <li><a href="guest_select.php" class="footer-link">user</a></li>
                <li><a href="product_select.php" class="footer-link">product</a></li>
                <li><a href="select_order2.php" class="footer-link">order</a></li>
                <li><a href="select_history2.php" class="footer-link">history</a></li>
                

            </ul>

            
        </div>
        

    </div>
</footer>




</body>
</html>