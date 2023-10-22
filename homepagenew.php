<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
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
    <li class="link-item"><a href="allproducts.php" class="link">home</a></li>
    <li class="link-item"><a href="lover.php" class="link">lover</a></li>
    <li class="link-item"><a href="mother.php" class="link">mother</a></li>
    <li class="link-item"><a href="maiden.php" class="link">maiden</a></li>
    <li class="link-item"><a href="mystic.php" class="link">mystic</a></li>
    <li class="link-item"><a href="sage.php" class="link">sage</a></li>
    <li class="link-item"><a href="huntress.php" class="link">huntress</a></li>
    <li class="link-item"><a href="queen.php" class="link">queen</a></li>
</ul>

<header class="hero-section">
    <div class="content">
        <img src="img/light-logo.png" class="logo" alt="">
        <p class="sub-heading">DIVINE FEMININE IS THE AUTHENTIC YOU</p>
        <p class="sub-heading">Take a deep dive into a recollection of your aura and feminine essence.</p>
    </div>
</header>

<br><hr><br>

<main>
<div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="feminine/silk green.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">GOWN</h2>
            <p class="product-short-des">silk, green, elegant</p>
            <span class="price">$2000</span><span class="actual-price">$4000</span>
        </div>
    </div>

    <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="feminine/white minimalist.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">GOWN</h2>
            <p class="product-short-des">white, minimalist</p>
            <span class="price">$2000</span><span class="actual-price">$4000</span>
        </div>
    </div>

    <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="feminine/sheervneck.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">GOWN</h2>
            <p class="product-short-des">sheer, v-neck</p>
            <span class="price">$2000</span><span class="actual-price">$4000</span>
        </div>
    </div>
    </main>
<br><hr><br>
<footer>
    <div class="footer-content">
        <img src="feminine/logo2.JPEG" class="logo" alt="">
        <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">Categories</li>
                <li><a href="lover.php" class="footer-link">lover</a></li>
                <li><a href="maiden.php" class="footer-link">maiden</a></li>
                <li><a href="mother.php" class="footer-link">mother</a></li>
                <li><a href="sage.php" class="footer-link">sage</a></li>
                <li><a href="huntress.php" class="footer-link">huntress</a></li>
                <li><a href="queen.php" class="footer-link">queen</a></li>
                <li><a href="mystic.php" class="footer-link">mystic</a></li>
                
            </ul>
            <ul class="category">
                <li class="category-title">Socials</li>
                <li><a href="#" class="footer-link">Instagram</a></li>
                <li><a href="#" class="footer-link">Facebook</a></li>
                <li><a href="#" class="footer-link">Twitter</a></li>
                <li><a href="#" class="footer-link">Email</a></li>
                <li><a href="#" class="footer-link">Linkedin</a></li>
                <li><a href="#" class="footer-link">Snapchat</a></li>
                <li><a href="#" class="footer-link">Youtube</a></li>

            </ul>

            
        </div>
        

    </div>
</footer>




</body>
</html>