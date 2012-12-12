<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mess Menu Updater</title>
<link href='http://gymkhana.iitb.ac.in/~hostel6/h6Favicon.ico' rel='shortcut icon' type='jpg'/>
</head>
<body>
<?php

/* LDAP authentication */
	$ldap_uid = $_POST['name'];
	$ldapId	= $ldap_uid;
	$ldap_pass = $_POST['password'];
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($ldap_uid==''||$ldap_pass==''||($ldapId != "ravindra.m" && $ldapId != "10d020048" && $ldapId != "praveendath92")){
		header('Refresh: 1; http://gymkhana.iitb.ac.in/~hostel6/#!/admin');
		die("Invalid username/password. Please try again.");
	}
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong Username and/or Password. Please go back and try again.");
	
/* Mess Menu Updater */
$day = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
$type = array("Breakfast","Lunch","Tiffin","Dinner");

if(isset($_POST['update'])){
$data = array();
for($i=0;$i<sizeof($day);$i++){
	for($j=0;$j<sizeof($type);$j++){
		$data[$day[$i]][$type[$j]] = $_POST[$day[$i]."_".$type[$j]];
	}
}
$data = json_encode($data);
$file = fopen('mess.json',"w");
fputs($file,$data);
fclose($file);
echo 'Mess Menu Updated';
}

$json = file_get_contents("mess.json");
$data = json_decode($json,true);
echo '
<form method="post">
<table>
<tr><th></th>
';
for($j=0;$j<sizeof($type);$j++){
	echo '<th>'.$type[$j].'</th>';
}
for($i=0;$i<sizeof($day);$i++){
	echo '<tr><th>'.$day[$i].'</th>';
	for($j=0;$j<sizeof($type);$j++){
		echo '<td><textarea rows="4" cols="30" name="'.$day[$i]."_".$type[$j].'">'.$data[$day[$i]][$type[$j]].'</textarea></td>';
	}
	echo '</tr>';
}
echo '
<tr>
<td><input type="hidden" value="'.$_POST['name'].'"  name="name" /></td>
<td><input type="hidden" value="'.$_POST['password'].'"  name="password" /></td>
<td><input type="submit" value="Update" name="update" /></td>
</tr>
</table>
</form>';
?>
</body>
</html>