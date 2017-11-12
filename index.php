<?php
    require_once('allfun.php');
	/*function __autoload($clasname){
		
		include_once("$clasname.php");
	}
	$a = new allfun();
	$a-> add();*/
	
	$a = 016;
	$b = 2;
	echo $c = $a/$b;
    
	br();
	
    echo add();
	
	br();
	
	echo strstr('abc@xyz.com', '@', -1);
	
	br();
	
	$arr = array(1,2,3,4);
	$newArr = array();
	$tot = count($arr)-1;
	
	for($i=$tot; $i>=0; $i--){
	 $newArr[] = '';//$arr[$i];
	}
	pr($newArr);
	
	br();
	
	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
    $chnk = array_chunk($cars,2);
	pr($chnk);
	
	br();
	
	$array1 = array("a" => "green", "red", "blue", "red");
	$array2 = array("b" => "green", "yellow", "red");
	$result = array_diff($array1, $array2);

	pr($result);
	
	br();
	
	$arr = array( 1, 2, 3, 4, 5);
    unset($arr[3]);
    $arr = array_values($arr);
    pr($arr);
	
	br();
	
	$a = 3;
	echo ++$a;
	
	br();
	
	

	$numbers = array(3,5,6,7,8,11);

	$missing = array();
	for ($i = 1; $i < max($numbers); $i++) {
		if (!in_array($i, $numbers)) $missing[] = $i;
	}

	print_r($missing); //1,4,9,10

    br('Array Search');
	
	$state = array ("Karnataka", "Goa", "Tamil Nadu", "Andhra Pradesh");

    echo (array_search ("Tamil Nadu", $state) );

	br('Array Count');
	
	$fruits = array ("apple", "orange", array ("pear", "mango"),"banana");

    echo (count($fruits, 1));
	
	br();
	
	$foo = 'Bob';
    echo $bar = &$foo;
	
	br();
	
	$total = "25 students";
    $more = 10;
    $total = $total + $more;
    echo $total;
	
	br('===');
	
	$a = 5;
    $b = 5;
    echo ($a === $b);
	
	br();
	$a = 'abc,bca';
	echo $a;
	br();
	
	$team = "arsenal";

    switch ($team) {
    case "man":
     echo "I love man u";
    case "arsenal":
     echo "I love arsenal";
    case "manc":
     echo "I love manc"; 
	}
	
	br();
	$j=0;
	for($i=1; $i<=3;$i++){
		
	  echo $i.'<br>';
	  if($i==3){
		 $i=0;
		 echo '<br>';
      }
      if($j==11){
		 break;
	  }
      $j++;
	}
	
	br('Sort array elements');
	
	// take an array with some elements
	$array = array(9, 2, 18, 34, 3, 10, 15);
	// get the size of array
	$count = count($array);
	
	// Print array elements before sorting
	pr($array);
	for ($i = 0; $i < $count; $i++) {
		for ($j = $i + 1; $j < $count; $j++) {
			if ($array[$i] > $array[$j]) {
				$temp = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}
	echo "Sorted Array:" . "<br/>";
	// Print array elements after sorting
	pr($array);
	br('Multiple of array elements');
	$a = array(12, 5, 2);
    echo(array_product($a));
    
	
	br('Sort Associative Array');
	
	$age = array("Peter"=>"38","Ben"=>"43","Joe"=>"40");
	asort($age);

	foreach($age as $x=>$x_value)
	   {
	   echo "Key=" . $x . ", Value=" . $x_value;
	   echo "<br>";
	   }
   
	br('Array Search');
	
	$a = array("a" => "Jaguar", "b" => "Land Rover", "c" => "Audi", "d" => "Maseratti");
    echo array_search("Audi", $a);
	
	br('Array Replace');
	
	$city_west = array("NYC", "London");
    $city_east = array("Mumbai", "Beijing");
    pr(array_replace($city_west, $city_east));
	
	br('Array Position');
	
	$people = array("Peter", "Susan", "Edmund", "Lucy");
    echo pos($people);
	
	br();
	
	$num = 121; $rev = 0;
	while($num>=1){
		$rem = $num%10;
		$rev = ($rev*10)+$rem;
		$num = $num/10;
	}
	echo $rev;
	
	br('Tree *');
	for($i=0; $i<5; $i++){
		for($j=1; $j<=$i; $j++){
			if($i%2==0){
				echo '*';
			}else{
				echo '@';
			}
		}
		echo '<br>';
	}
	
	br();
	
	$string="welcome";
    $length=strlen($string);
    $length= round($length/2);
	$l = (int) $length-1;
    echo $string[$l];
	
	br();
	$st = "";
	$val = 42+(42*$st);
	echo $val;
	
	br();
	$str = strstr("user@example.com","@", '@');
	echo $str;
	
	br();
	
	$a = ' hello world';
	echo 'Hello'.ltrim($a);
	
	
	br();
	
	$n = $i = 5;
    while ($i--)
    echo str_repeat(' ', $i).str_repeat('* ', $n - $i)."\n";
	
	br();
	$j=1;
    
	br();
	
	$var1 = '98';  
	$var2 = '01';  
	settype($var1, "integer");
?>