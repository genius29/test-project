<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Logical Operators</title>
</head>
<body>
<?php
	$sherwin = array(3,4,"Sherwin","realty","Agentsquared");
	echo $sherwin[4]."</br>";

	$mixed = array(5,"what","oh,no!",array(34,"arvin",6,56));
	echo $mixed[3][3];
?>
<pre>
<?php
	print_r($sherwin);
	print_r($mixed);
?>
</pre>
<?php
	function whatIsToday(){
		echo "Today is " . date('Today', time());
	}
	whatIsToday();
?> <br><br>
<?php
	function kuhaSum($genius, $amaii){
		$suma = $genius + $amaii;
		echo "Ang Suma total sa duha ka numero $genius ug $amaii kay: $suma";
	}
	kuhaSum(20, 30);
?>
</body>
</html>


<?
   // $countrysCapitals = array("Russia"=>"Moscow", "USA"=>"Washington",  //-- array
                               // "China"=>"Shanghai") ;
    //#$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
    
    //$people = array(        //multi-dimensional array
        //'best'=>array('David', 'Amy','<b>Sherwin</b>','Arvin'),
       // 'better'=>array('John', 'Rob', 'Jack','Tywin','<b><big>Jon Snow</big></b>'),
      //  'good'=>array('Arthur', 'Daniel', 'Jose', 'Giovanni')
   // );

    
   // echo $countrysCapitals ["China"];
  //  echo "<br/>";
    //echo $countrysCapitals ["Russia"];
   // echo "<br/>";
  //  echo $people ['best'][2];
//