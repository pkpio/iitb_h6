<?php
$connect = 0;

function connect()
{
	if($connect == 0)
	{
		$username = "hostel6";
		$password = "g0v1k1ngs";
		$host = "localhost";
		$database = "hostel6";
		mysql_connect($host,$username,$password) or die(mysql_error());
		mysql_select_db($database);
		$connect = 1;
	}
}

function checklogin($username,$password)
{
	//if($_SERVER[REMOTE_ADDR]!='127.0.0.1') die("You are not allowed to use this //page.");//change here
	
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($username=='') die("You have not entered any LDAP ID. Please go back and fill it up.");
	if($username!='admin')
	{
		$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)");
		$info = ldap_get_entries($ds, $sr);
		$ldap_uid = $info[0]['dn'];
		$roll = $info[0]['employeenumber'][0];
		$do_bind = @ldap_bind($ds,$ldap_uid,$password) or die("Wrong Username and/or Password. Please go back and try again.");
		return $roll;
	}
	if($username=='admin' && $password!='elessar2') die("Wrong Username and/or Password. Trying to Hack!");
	return "admin";
		
}

?>
