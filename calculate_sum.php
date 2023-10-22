#question one (iii)



<?php

$fnum=$_POST['firstNumber'];
$snum=$_POST['secondNumber'];

function Calculator(){
	global $fnum;
	global $snum;
	$sum=$fnum + $snum;
	echo 'The sum of number1 and number2 is'.$sum;
}
Calculator();

?>