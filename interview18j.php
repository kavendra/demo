<?php
 include('allfun.php');
 
    br('Question1');
	
	$var1 = '98 jjjjj';  
	settype($var1, "integer");
	echo $var1;
	#98
	br('Question2');
	$arr = array(1 => 2, 2 => 3, 3 => 4);
	pr($arr);
	#Array ( [1] => 2 [2] => 3 [3] => 4 )
	
	$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
	$outputArray = array();

	foreach($inputArray as $inputArrayItem){		 
		foreach($outputArray as $outputArrayItem) {
			if($inputArrayItem == $outputArrayItem) {
				continue 2;
			}
		}

		$outputArray[] = $inputArrayItem;
	}
	pr($outputArray); 
	
	
	
	for ($i = 0; $i < 5; ++$i) {
    if ($i == 2){
        continue;
	}	
    print "$i\n";
   }
   
   br();
   $_POST['id'] = 1;
   echo $sql = "Select * from users where 1=".$_POST['id'];
   br();
  
   function keep_track() {
      STATIC $count = 0;
      $count++;
      print $count;
      print "<br />";
   }
   
   keep_track();
   keep_track();
   br();
 ?>