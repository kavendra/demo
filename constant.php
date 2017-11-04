<?php

// Method overloading

class Shape {
	const PI = 3.142 ;
	 
	function __call($name, $arg){
		
		if($name == 'ar')
			switch(count($arg)){
				case 0 : return 0;
				case 1 : return self::PI * $arg[0];
				case 2 : return $arg[0] * $arg[1];
			}
		}
	}
	$circle = new Shape();
	echo $circle->ar(5).'<br>';
	 
	$rect = new Shape();
	echo $rect->ar(5,10);

?>