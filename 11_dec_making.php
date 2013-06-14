<?php
	/*
	$d=date("D");
	if ($d=="Fri")
		echo"have a nice weekend";
	else
		echo "have nice day";
	
	
	$d = date("D");
	if ($d=="Fri")
		{
		echo "hello";
		echo "have a nice weekend";
		echo "see you on monday";	
		}
	
	
	
	$d = date("D");
	if ($d=="Fri")
		echo "Have a nice weekend!";
	elseif ($s=="Sun")
		echo "Have a nice sunday!";
	else
		echo "Have a nice day!";
	*/
	
	$d = date("D");
	switch ($d)
	{
		case "Mon";
			echo "Today is Monday";
			break;
		case "Tue";
			echo "today is tuesday";
			break;
		case "Wed";
			echo "today is wednesday";
			break;
		case "Thu";
			echo "today is thursday";
			break;
		case "Fri";
			echo "today is friday";
			break;
		case "Sat";
			echo "today is saturday";
			break;
		case "Sun";
			echo "today is sunday";
			break;
		default :
			echo "wonder which day is this";
	}
?>