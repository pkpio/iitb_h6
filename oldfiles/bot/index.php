<?php

	/////////////menu week 1/////////////////////////
	
	
	$breakfast1[0] = "Poha, Omlet, B-B-J, Tea, Cold Bournvita, Banana";
	$breakfast1[1] = "Poori Bhaji, B-B-J, Bournvita, Tea, Coffee, Banana";
	$breakfast1[2] = "Uttappa, B-B-J, Cold Bournvita, Tea, milk, Boiled Egg, Banana ";
	$breakfast1[3] = "Gobhi Paratha, B-B-J, Banana, Hot Milk, Boiled Egg";
	$breakfast1[4] = "Veg Sandwich, B-B-J, Cold Bournvita, Omlet, Tea, Coffee, Banana";
	$breakfast1[5] = "Alu/Methi Paratha(with dahi, sauce), Tea, Coffee, Bournvita, B-B-J, Banana";
	$breakfast1[6] = "Paneer Paratha(with dahi, sauce), Milk, Tea, Coffee, B-B-J, Banana";
	
	
	$lunch1[0]="Chhole Bhature, Lassi, Jeera rice, Imli chutney, Salad (onion small)";
	$lunch1[1]="Aloo Shimla, Plain Paratha, Rice, Dal, Rasna, Masala Papad, Salad, Dahi";
	$lunch1[2]="Paneer Butter Masala, Dal fry, Jeera Rice, Chapatti, Salad, Dahi";
	$lunch1[3]="Dum Aloo, Plain Paratha, Dal, Rice, Butter, Jaljeera, Dahi";
	$lunch1[4]="Rajma, Rice, Dal, Methi Puri, Chhaas, Salad, Green Chutney";
	$lunch1[5]="Bhindi do Pyaza, Roti, Dal, Rice, Salad, Rasna";
	$lunch1[6]="Poori, Bhaji, Shrikhand, Dal, Rice";
	
	$tiffin1[0]="Paani Puri, B-B-J, Tea, Coffee";
	$tiffin1[1]="Dry Maggi, Chilly Sauce, B-B-J, Tea, Coffee.";
	$tiffin1[2]="Samosa, Kachori, Dahi, Chutney, Sev, B-B-J, Tea, Coffee";
	$tiffin1[3]="Pav Bhaji, B-B-J, Tea, Coffee";
	$tiffin1[4]="Dhokla, B-B-J, Tea, Coffee";
	$tiffin1[5]="Idli, Sambhar, Chutney, B-B-J, Tea, Coffee";
	$tiffin1[6]="Veg Cutlet/Ragda Pattice, B-B-J, Tea, Coffee";
	
	$dinner1[0]="Tawa Sabji, Rice, Dal, Chapatti, Rasgulla";
	$dinner1[1]="Gobhi Manchurian, Veg Noodles, Raita, Chapatti, Veg Fried Rice, Milk Shake";
	$dinner1[2]="Chicken Lollipop, Alu Cauliflower, Pulav, Roti, Dal, Malai Sandwich";
	$dinner1[3]="Dal Khichadi, Boora(Sugar Powder), Desi Ghee, Papad, Roti, Papad, Gulab Jamun, Stuffed Tomato";
	$dinner1[4]="Roomali Roti, Paneer Kohlapuri, Butter Chicken, Jeera Rice, Motichoor Laddoo";
	$dinner1[5]="Chhole, Rice, Dal, Chapatti, Milkshake";
	$dinner1[6]="Paneer Chilly, Veg Fried Rice, Soup, Waffers, Custurd";
   
   ////////////////////////////////////////////////////
   ////////////////////////////////////////////////////
   
   
   
   $message = strtolower($_REQUEST['msg']);
	 $arguments = array();
	 $arguments = explode(" ", $message);
	 
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