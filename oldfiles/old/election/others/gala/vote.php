<html>
<head>
<title>Hostel-6 GALA dinner referendum</title>
</head>
<?php
	  echo "<body>";
if(isset($_POST['id']))
{  
	$con = mysql_connect("localhost","hostel6","hostel666");
	mysql_select_db("hostel6",$con);
	$ldap_uid = $_POST['id'];
	$ldap_pass = $_POST['pass'];
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($ldap_uid=='') die("You have not entered any LDAP ID. Please go back and fill it up.");
	if($ldap_uid!='administrator')
	{
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong Username and/or Password. Please go back and try again.");

	$query = "select * from users where id = '".$_POST['id']."'";
	$res = mysql_query($query,$con);
	$num_rows = mysql_num_rows($res);
	if($num_rows == 1) die("<b>user has already voted</b>");
	else
	{
	$query = "insert into users values ('".$_POST['id']."')";
	mysql_query($query,$con);
	}
	}
	if($ldap_uid=='administrator' && $ldap_pass!='elessar2') die("Wrong Username and/or Password. Trying to Hack!");
	$starter1 = $_POST['starter1'];
	$starter2 = $_POST['starter2'];
	$course1 = $_POST['course1']; 
	$course2 = $_POST['course2']; 
	$course3 = $_POST['course3']; 
	$rice = $_POST['rice'];
	$chicken = $_POST['chicken'];
	$sweet= $_POST['sweet'];
	
	   
	
	


	$query = "update starter set s".$starter1." = s".$starter1."+1";
	mysql_query($query,$con);
	$query = "update starter set s".$starter2." = s".$starter2."+1";
	mysql_query($query,$con);
	$query = "update course1 set c".$course1." = c".$course1."+1";
	mysql_query($query,$con);
	$query = "update course2 set c".$course2." = c".$course2."+1";
	mysql_query($query,$con);
	$query = "update course3 set c".$course3." = c".$course3."+1";
	mysql_query($query,$con);
	$query = "update rice set r".$rice." = r".$rice."+1";
	mysql_query($query,$con);
	$query = "update chicken set c".$chicken." = c".$chicken."+1";
	mysql_query($query,$con);
	$query = "update sweet set s".$sweet." = s".$sweet."+1";
	mysql_query($query,$con);
	die("<b>Thank you!!!<br/>Your vote has been taken.<br/><br/>Looking forward for a nice GALA Dinner!!!</b>");

}

?>
	
	</body>
</html>
