<?php
	$ldap_uid = $_POST['name'];
	$ldapId	= $ldap_uid;
	$ldap_pass = $_POST['password'];
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($ldap_uid==''){
	header('Refresh: 1; http://gymkhana.iitb.ac.in/~hostel6/#!/admin');
	 die("You have not entered any LDAP ID. Please go back and fill it up.");
	}
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong Username and/or Password. Please go back and try again.");
//	print "correct password";

/*
if($ldapId != "praveendath92" && $ldapId != "100070028"){
	header('Refresh: 5; http://gymkhana.iitb.ac.in/~hostel6/#!/admin');
	echo "<span style='color:#F00;'>Login failed!</span><br/><br/>";
	die("<b>Get a life dude</b>. You have better things to do than trying to login to an unauthorised place with correct creditials ofcourse. Try demo interface available in the login page if you are so curious.");
}
*/
$file = fopen('demo.txt','r');
$data= fread($file,filesize('demo.txt'));
$content = explode(';',$data);
fclose($file);
?>
<form action="save.php" method="post">
<h1>Demo Admin Page</h1>
<h4>Updates Editing</h4>
<p>Update1 Heading</p><input type="text" maxlength="30" size="25" value="<?php if(isset($data[0]))echo $content[0]; ?>" name="update1Heading" />
<p>Update1 Text</p><input type="text" maxlength="50" size="45" value="<?php if(isset($data[1]))echo $content[1]; ?>" name="update1Text" />

<p>Update2 Heading</p><input type="text" maxlength="30" size="25" value="<?php if(isset($data[2]))echo $content[2]; ?>" name="update2Heading" />
<p>Update2 Text</p><input type="text" maxlength="50" size="45" value="<?php if(isset($data[3]))echo $content[3]; ?>" name="update2Text" />

<p>Update3 Heading</p><input type="text" maxlength="30" size="25" value="<?php if(isset($data[4]))echo $content[4]; ?>" name="update3Heading" />
<p>Update3 Text</p><input type="text" maxlength="50" size="45" value="<?php if(isset($data[5]))echo $content[5]; ?>" name="update3Text" />
<input type="submit" />
</form>

	
