<?php  
     Class p{
        
        var $a = 10;
     	function afun(){

     		echo 'This is parent class function';
     	}

     }

    Class c extends p{

    	function bfun(){

    		echo 'This is child class function';
    	}
    }

    echo p::a();
?> 