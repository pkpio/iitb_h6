<?php
$day = date("D");
$json = file_get_contents("admin/mess/mess.json");
$data = json_decode($json,true);
$type = array("Breakfast","Lunch","Tiffin","Dinner");
for($i=0;$i<sizeof($type);$i++){
	echo '
	<span id="messHeading">'.$type[$i].'</span><br/>
	'.$data[$day][$type[$i]].'<br/><br/>
	';
}
?>