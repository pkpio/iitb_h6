<?php
	$file="roll.txt";
	$fh=fopen($file,r);
	$dat=fread($fh,filesize($file));
	$uid=explode("\n",$dat);
	$ds=ldap_connect("ldap.iitb.ac.in");
	if($ds)
	{
		$r=ldap_bind($ds);
		$out=fopen("a.txt",a);
		for($i=0;$i<count($uid);$i++)
		{
			$sr=ldap_search($ds,"dc=iitb,dc=ac,dc=in","(employeenumber=$uid[$i])");
			$info = ldap_get_entries($ds, $sr);
			//print_r($info);
			$data="INSERT INTO `hostel6`.`users` (`rollno` ,`id` ,`voted`) VALUES ('".$uid[$i]."' ,'".$info[0]["uid"][0]."', '0');\r\n";
			mysql_connect('localhost','hostel6','hostel666');
			mysql_query($data);
		}
		fclose($out);
		ldap_close($ds);
	}
	else
	{
		echo "<h4>Unable to connect to LDAP server</h4>";
	}
?>
	<b><i>Created from the absolute scratch by Naumaan!</i></b>
