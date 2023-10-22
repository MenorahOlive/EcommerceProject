<?php
$servername="localhost";
$username="root";
$password="";
$database="database";

$conn=mysqli_connect($servername, $username, $password, $database);

if(!$conn){
	die("Could not connect".mysqli_connect_error());
}
else{
	echo "Connected Successfully";
}

?>