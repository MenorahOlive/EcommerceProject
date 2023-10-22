<?php
$fooditem=$_POST['item'];
$quantity=$_POST['qty'];
$img1='cookie.jpg';
$img2='lollipop.jpg';
$img3='croissants.jpg';

if($fooditem="cookies"){

	echo "Order successful! Here is what you ordered:";
	for ($i=0; $i <=quantity; $i++) { 
		print "<img src=\"$img1\/>";
	}
	
	if($fooditem="lollipop"){

	echo "Order successful! Here is what you ordered:";
	for ($i=0; $i <=quantity; $i++) { 
		print "<img src=\"$img2\/>";
	}
	
	if($fooditem="croissants"){

	echo "Order successful! Here is what you ordered:";
	for ($i=0; $i <=quantity; $i++) { 
		print "<img src=\"$img3\/>";
	}
	
	
}
else{
	HTTP_error (400);
}



?>