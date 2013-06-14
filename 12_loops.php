<?php

	$a = 0;
	$b = 0;
	
	for ($i=0; $i<5; $i++)
	{
		$a += 10;
		$b += 5;
	}
	echo ("at the end of the loop a=$a and b=$b");
		

	

	
	$i = 0;
	$num = 0;
	
	do
	{
		$i++;
	} while ($i < 10);
	echo ("loop stopped at i = $i");
	

	$array = array (1,2,3,4,5);
	foreach ($array as $value)
	{
		echo " value is  $value <br>";
	}
	
	
	$i = 0;
	
	while ($i < 10)
	{
		$i++;
		if($i==3) break;	
	}
	echo ("loop stopped at i = $i");
	
	
	$array = array (1,2,3,4,5);
	foreach ($array as $value)
	{
		if ($value==3) continue;
		echo "value is $value <br>";	
	}
?>