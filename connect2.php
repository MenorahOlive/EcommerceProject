<?php
$servername="localhost";
$username="root";
$password="";
$database1="database";

$conn=mysqli_connect($servername, $username, $password, $database1);

if(!$conn){
	die("Could not connect".mysqli_connect_error());
}
else{
	echo "Connected Successfully";
}

?>