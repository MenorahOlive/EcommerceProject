<?php
require("connect.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$first_name=$_POST["username"];
	$user_password=$_POST["password"];


	$sql="select * from myguests where first_name='".$first_name."' AND password='".$user_password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	if($_SESSION["first_name"]=$first_name)
	{	

		

		header("location:userpage.php");
	}
	

	else
	{
		echo "The first name or last name or password or user type is found to be incorrect";
	}
}

?>