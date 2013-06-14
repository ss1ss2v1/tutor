<?php
/*
	$numbers = array (1,2,3,4,5);
	foreach($numbers as $value)
	{
		echo "value is $value <br>";	
	}
	
	$numbers[0]= "one";
	$numbers[1]="two";
	$numbers[2]="three";
	$numbers[3]="four";
	$numbers[4]="five";
	
	foreach ($numbers as $value)
	{
		echo "value is $value <br>";	
	}


	$salaries = array (
						"mohammad" => 2000,
						"qadir" => 1000,
						"zara" => 500
					   );	
	
	echo "salary of mohammad is ".$salaries ["mohammad"]."<br>";
	echo "salary of mohammad is ".$salaries ["qadir"]."<br>";
	echo "salary of mohammad is ".$salaries ["zara"]."<br>";
	
	$salaries ['mohammad'] = "high";
	$salaries ['qadir'] = "medium";
	$salaries ['zara'] = "low";
	
	echo "Salary of mohammad is ". $salaries ["mohammad"]."<br>";
	echo "Salary of qadir is ". $salaries ["qadir"]."<br>";
	echo "Salary of mohammad is ". $salaries ["zara"]."<br>";
	
*/
	$marks = array ("mohammad" => array
					(
						"physics" => 35,
						"maths" => 30,
						"chemistry" => 39
					),
					"qadir" => array
					(
						"physics" => 30,
						"maths" => 32,
						"chemistry" => 29
					),
					"zara" => array
					(
						"physics" => 31,
						"maths"=> 22,
						"chemistry"=>39
					)
					
				);
	echo "mohammad in physics : ";
	echo $marks ['mohammad'] ['physics'] . "<br>";
	echo "qadir maths : ";
	echo $marks ['qadir'] ['maths'] . "<br>";
	echo "zara chemistry : ";
	echo $marks ['zara'] ['chemistry'] . "<br>";
							

	
	
?>