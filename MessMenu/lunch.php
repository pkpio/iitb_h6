<?php
$message2 = 'lunch';
include_once 'MessMenu/index.php';
  
   
//   $message = strtolower($_REQUEST['msg']);
	 $arguments = array();
	 $arguments = explode(" ", $message2);
	 
	 $valid = 1;
	 if(sizeof($arguments) == 1)
	 {
		 $today = getdate();
		 $day = $today['weekday'];
		
		 if($day == "Sunday") $i=6;
		 else if($day == "Monday") $i=0;  
		 else if($day == "Tuesday") $i=1;
		 else if($day == "Wednesday") $i=2;
		 else if($day == "Thursday") $i=3;
		 else if($day == "Friday") $i=4;
		 else if($day == "Saturday") $i=5;
		 
		 $type = $arguments[0];
	 }
	 else if(sizeof($arguments) == 2)
	 {
		 $day = $arguments[0];
		 if($day == "sunday") $i=6;
		 else if($day == "monday") $i=0;  
		 else if($day == "tuesday") $i=1;
		 else if($day == "wednesday") $i=2;
		 else if($day == "thursday") $i=3;
		 else if($day == "friday") $i=4;
		 else if($day == "saturday") $i=5;
		 else $valid = 0;
		 
		 $type = $arguments[1];
	 }
	 else 
	 	$valid = 0;
	 
	 if($valid == 1){
		 if($type == "breakfast") 
		 	echo $breakfast1[$i];
		 else if($type == "lunch")
		 	echo $lunch1[$i];
		 else if($type == "tiffin")
		 	echo $tiffin1[$i];
		 else if($type == "dinner")
		 	echo $dinner1[$i];
		 else $valid = 0;
	 }

   if($valid == 0){
	 echo "Hello, Please enter the following keywords<br/>";
	 echo "1) \"breakfast\"<br/>"; 
	 echo "2) \"lunch\"<br/>";
	 echo "3) \"tiffin\"<br/>";
	 echo "4) \"dinner\"<br/>";
	 echo "5) \"Day mealName\"<br/>";
   }
?>