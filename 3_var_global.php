<?php
    	$somevar = 15;
		function addit () {
		 global $somevar;
		 $somevar++;
		 echo"$somevar";	
		}
		
		addit();
	



?>