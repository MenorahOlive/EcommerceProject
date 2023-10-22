<?php
require('connect.php');
session_start();
print_r($_POST);
$uid = 	$_POST['uid'];
$qty = 	$_POST['quantity'];