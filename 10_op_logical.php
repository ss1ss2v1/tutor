<?php
	
	$a=42;
	$b=0;
	
	if ($a && $b) {
		echo "both a and b are true <br>";		
	}
	else {
		echo "either a or b is false<br>";
	}
	
	if ($a and $b) {
		echo "both a and b are true<br>";
	}
	else {
		echo"either a or b is false <br>";	
	}
	
	if ($a||$b) {
		echo "either a or b are true <br>";		
	}
	else {
		echo "both a and b are false <br>";	
	}
	
	if($a or $b){
		echo "either a or b is true <br>";	
	}
	else{
		echo "both a and b are false <br>";	
	}
	
	$a = 10;
	$b = 20;
	
	if ($a) {
		echo "a is true<br>";
	}
	else {
		echo "a is false<br>";	
	}
	
	if ($b) {
		echo "b is true<br>";	
	}
	else {
		echo "b is false<br>";	
	}
	
	if (!$a){
		echo" a is true<br>";
	}
	else {
		echo " a is false<br>";	
	}
	
	if (!$b) {
		echo "b is true<br>";		
	}
		else {
		echo "b is false<br>";		
	}
?>