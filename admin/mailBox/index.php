<?php
/*	$ldap_uid = $_POST['name'];
	$ldap_pass = $_POST['password'];
	$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
	if($ldap_uid=='') die("You have not entered any LDAP ID. Please go back and fill it up.");
	$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
	$info = ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong Username and/or Password. Please go back and try again.");
	print "correct password";
*/
if(isset($_POST['accesscode'])&&$_POST['accesscode'] == "post"){
$fd = fopen('../../roomlist.txt','r');
$data= fread($fd,filesize('../../roomlist.txt'));
fclose($fd);
?>
<form action="save.php" method="post">
<textarea rows="10" name="data" cols="20"><?php echo htmlspecialchars($data); ?></textarea><br/>
<input type="submit" value="Update" />
<?php
}
else{
	header('Refresh: 1; http://gymkhana.iitb.ac.in/~hostel6/#!/mailBox');
	echo "<p style='color:#F00'>Invalid access!!</p>";
}
	?>