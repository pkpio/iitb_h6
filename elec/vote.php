<?php
$username=$_POST['ldapUser'];
$password=$_POST['ldapPassword'];

$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db('hostel6',$con);

function validate_user($username, $password)
{
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)");
	$info = ldap_get_entries($ds, $sr);
			
	$ldap_uid = $info[0]['dn'];
	$roll = $info[0]['employeenumber'][0];
	$username = $info[0]["uid"][0];
	//$employeetype = $info[0]['employeetype'][0];

	
	$do_bind = @ldap_bind($ds,$ldap_uid,$password);
	if(!$do_bind) {
			$result['success'] = 'false';
			$result['status'] = "Wrong Ldap credentials.";
	}
	else {
			$result['username'] = $username;
			$result['roll'] = $roll;
			$query = "select * from roll where rollno = \"".$result['roll']."\"";
			$users_result = mysql_query($query);
			//if (!assert("\$users_result != false /* MYSQL_ERROR: ".mysql_error()." */ ")) {
			//	return false;
			//}
			if(mysql_num_rows($users_result) == 0)
			{
				$result['success'] = 'false';
				$result['status'] = "You are not allowed to vote. This instance will be reported to the election committee."; 
			}
			else
			{
				$row = mysql_fetch_assoc($users_result);
				//$result['electorate'] = $row['electorate'];
				if($row['voted'] == 1)
				{
					$result['success'] = 'false';
					$result['status'] = "You have already voted. This instance will be reported to the election committee."; 
				}
				else
				{
					$result['success'] = 'true';
				}
			}
	}
	return $result;

}
$result=validate_user($username, $password);
if($result['success']=='false')die($result['status']);

		$sql="";
for($i=0;$i<=6;$i++)
{
	for($j=0;$j<=40;$j++)
	{
		if (isset($_POST[$i."_".$j])){
		//	print($i."_".$j."\n");
			$sql="UPDATE q".$i." SET option".$j."=option".$j."+1 WHERE sno=1;";
	mysql_query($sql) or die ("error".mysql_error());
		}
	}

	
	/*$sql='UPDATE '.$tableName.' SET column'.$_POST[$i].'=column'.$_POST[$i].'+1 WHERE sno='.$i.'+1';
	mysql_query($sql) or die ("error".mysql_error());
	$sql='UPDATE roll1 set voted=1 where rollno="'.$result['roll'].'"'; */
}
	

	$sql="UPDATE q5 SET option".$_POST['5']."=option".$_POST['5']."+1 WHERE sno=1;";
        mysql_query($sql) or die ("error".mysql_error());             




$sql='UPDATE roll set voted=1 where rollno="'.$result['roll'].'"';
	
	mysql_query($sql) or die (mysql_error());

mysql_close($con);

echo 'success '.$result['roll'];
?>
