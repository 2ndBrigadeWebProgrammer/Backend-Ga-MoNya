<?php
	function variableName() {
		//variable name starts with alphabet or underscore(_).
		static $color='BLACK';
		echo "This color is $color";
		echo "\n";

		//echo statement can have multiple input variables, separated by comma(,)s.
		$name="Kyungmin";
		echo "This color is ".$name.$color;
		echo "\n";
	}
	
	function staticVariable() {
		//excercise for static variable.
		 function static_var()  
		{  
			static $num1 = 3;       
			$num2 = 6;          

			$num1++;  
			$num2++;  

			echo "Static: " .$num1;  
			echo "\nNon-static: " .$num2; 
			echo "\n";

		}  

		static_var();  //non-statuc variable result is garbage-collected.
		static_var();  //static variable result is stored.
		echo "\n";
	}
	
	function doubleDollar() {
		//exercise for double-dollar sign ($$).
		$name="Cat";  
		${$name}="Dog";  //$Cat ="Dog";
		${${$name}}="Monkey"; //$Dog="Monkey";

		echo $name. "\n";  
		echo ${$name}. "\n";  
		echo $Cat. "\n";  
		echo ${${$name}}. "\n";  
		echo $Dog. "\n"; 
	}
	
	function defineFunc() {
		
	}
?>
