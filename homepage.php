<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($conn);

?>


<!DOCTYPE>
<html>
<head>
	<title>Divine Feminine</title>
	<link rel="stylesheet" href="homepagestyle.css">
</head>
<body>
	<!--Above the Fold-->
	<header>
		<div id="logo">
			<h1 class="logo">Divine Feminine</h1>
			
		</div>
		<div id="navigation">
		<nav>
			<ul>
				<li><a href="maiden.php">Maiden</a></li>
				<li><a href="mother.php">Mother</a></li>
				<li><a href="mystic.php">Mystic</a></li>
				<li><a href="lover.php">Lover</a></li>
				<li><a href="sage.php">Sage</a></li>
				<li><a href="huntress.php">Huntress</a></li>
				<li><a href="queen.php">Queen</a></li>
				<li><a href="queen.php">Cart</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				
				
			</ul>
			</nav>
		</div>
	</header>
		<main>
		<div class="container">
			<img src="feminine/goldensequin.jpg" alt="goldensequindress" style="width: 100%; height:100%" >
			<h2 class="left">DIVINE FEMININE IS THE AUTHENTIC YOU<h2>
			<h3 class="left">Take a deep dive into a recollection of your aura and feminine essence. </h3>
			<h4 class="left">Dress like the the energy you wish to exude! </h4>
		    
		    <button class="button right"><a href="allproducts.php">SHOP NOW</a></button>
		</div>
	</main>
	

	<!--Below The Fold-->
	
	<section>
		<div class="benefits list">
			<h3 class="heading">Features</h3>
			<div class="benefit">
				<h3>Free World Wide Shipping</h3>
				<p>Dress like a <strong>divine goddess</strong> anywhere and everywhere!</p>
			</div>
			<div class="benefit">
				<h3>7 days full returns</h3>
				<p>Treat yourself like a <strong>Queen</strong> with no fear</p>
			</div>
			<div class="benefit">
				<h3>24/7 Support</h3>

				<p>Our Team is curated for your every need</p>
			</div>
			
		</div>
		<hr>
		<div id="featureslist">
			<div id="newarrivals">
				
			</div>
			<div >
				<h3 class="heading">Shop by Category</h3>
				<nav>
				<ul>
				<li ><a href="Gowns">Gowns</a></li>
				<li ><a href="Blazers">Blazers</a></li>
				<li ><a href="Blouses">Skirts</a></li>
				<li ><a href="Accessories">Accessories</a></li>
				<li ><a href="Pants">Pants</a></li>
				<li ><a href="Bags">Bags</a></li>
				<li ><a href="Shoes">Shoes</a></li>
				<li ><a href="Skirts">Skirts</a></li>
				<li ><a href="Lingerie">Skirts</a></li>

				<nav>
			</ul>
			</div>
			<hr>


		    
		    	<h3 class="heading">Testimonials</h3>


			    <div class="testimonial">
				<h4><i>Sally Henderson - Australia</i></h4>
				<p>Wow! This brand is a blessing. Absolutely in awe. I recently started getting into feminine archytypes. I took a test and decided
				I wanted to embody the mystic archetype. This store not only has the best pieces but it arranges them according to your specific archetpe. Brilliant! </p>
			    </div>

			    <div class="testimonial">
				<h4><i>Summer Sweetny - Denmark</i></h4>
				<p>Best! Store! Ever! I started shopping here recently and I had to put all of my friends on it. I recently began my spiritual journey and I have to agree the future is female. This store has helped me embody my maiden style to the tee. I feel absolutely confident in my style now that i understand my power as a feminine woman </p>
			    </div>

			    <div class="testimonial">
				<h4><i>Fikile Sande - South Africa</i></h4>
				<p>I love this store. It's pure luxury. Whenever I shop here I always choose the lover cartegory. I believe it has the best gowns for beautiful nights out. Ever since I started dressing like my archetype i have to admit I feel completely at ease with my whole being. Not to mention loads of luck on dates ;) The lover category makes me feel comfortable in my own skin. I love it!</p>
			    </div>
			
		
	
	<section id="additionalcontent">
		<hr>
		<div>
        <div class="additional">

        	<h3 class="heading">More Info</h3>
        	<nav>

            <ul>

                <li><a href="">HOME</a></li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
                <li><a href="">OFFERS</a></li>
                <li><a href="">UPDATES</a></li>
                <li><a href="">BLOG</a></li>
    
            </ul>
        </nav>
        </div>


        <div class="additional">
        	<h3 class="heading">Social Media</h3>
        	<nav>

            <ul>

                <li><a href="">INSTAGRAM</a></li>
                <li><a href="">TIKTOK</a></li>
                <li><a href="">FACEBOOK</a></li>
                <li><a href="">lINKEDIN</a></li>
                <li><a href="">YOUTUBE</a></li>
                <li><a href="">PINTEREST</a></li>
    
            </ul>
        </nav>
        </div>
       
      <div>
	</section>
	
</body>
</html>
