<?php
	$server = "localhost";
	$username = "hostel6";
	$password = "hostel666";
	$connect = mysql_connect($server, $username,$password);
	mysql_select_db("hostel6", $connect);

	for($i=1;$i<=22;$i++)
	{
		if(isset($_POST["b".$i])) $b[$i] = 1;
		else $b[$i] = 0;
		if(isset($_POST["l".$i])) $l[$i] = 1;
		else $l[$i] = 0;
		if(isset($_POST["t".$i])) $t[$i] = 1;
		else $t[$i] = 0;
		if(isset($_POST["d".$i])) $d[$i] = 1;
		else $d[$i] = 0;
	}

	

	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == "admin"){
			if($password != "elessar") die("trying to hack. Go to hell and die");
		}
		else {
			$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
			$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$username)");
			$info = ldap_get_entries($ds, $sr);
			$ldapname = $info[0]['dn'];
			$do_bind = @ldap_bind($ds,$ldapname,$password) or die("Wrong Username and/or Password. Please go back and try again.");

			$result = mysql_query("select * from users where id ='".$username."'") or die(mysql_error());
			$row = mysql_num_rows($result);
			if($row == 0) die("You dont belong to this hostel.You are not eligible for this polling.<br/>For further queries, contact the system administrator");
			$row = mysql_fetch_array($result);
			if($row['voted'] == 1) die("user has already voted. Can't vote twice");
			
			mysql_query("update users set voted = 1 where id ='".$username."'") or die("unable to vote. please contact admin asap");
		}
			$result = mysql_query("SELECT * FROM votes");		
			$row = mysql_fetch_array($result);
			for($i=1;$i<=16;$i++)
			{
				$name="b".$i;
				$val=$row[$name]+$b[$i];
				mysql_query("UPDATE votes SET $name = $val");	
			}
			for($i=1;$i<=22;$i++)
			{
				$name="l".$i;
				$val=$row[$name]+$l[$i];
				mysql_query("UPDATE votes SET $name = $val");		
			}
			for($i=1;$i<=19;$i++)
			{
				$name="t".$i;
				$val=$row[$name]+$t[$i];
				mysql_query("UPDATE votes SET $name = $val");
			}
			for($i=1;$i<=21;$i++)
			{
				$name="d".$i;
				$val=$row[$name]+$d[$i];
				mysql_query("UPDATE votes SET $name = $val");
			}
			echo "your votes have been submitted. <br/> Thank you.<br/><br/>To go back, click <a href=\"index.html\">here</a>";
	}
	else
	{
	 echo "Please enter your ldap id and password to vote. To go to the voting page click <a href=\"index.html\">here</a>.";
	}
	?>
