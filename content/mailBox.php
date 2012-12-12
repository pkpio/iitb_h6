<?php
$file = fopen('../roomlist.txt','r');
$data= fread($file,filesize('../roomlist.txt'));
$roomlist = explode("\n",$data);
fclose($file);
?>
<script>
$(document).ready(function() {
document.getElementById("loadingImage").style.visibility="hidden";})
</script>
<div id="TextContent">
<style>
#TextContent input{
	padding:4px 10px 4px 10px;
	text-align:center;
}
#roomsList{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:14px;
	line-height:22px;
}
</style>
<h1>Mail box</h1>
<p>The following is the list of room numbers of the inmates who have received letters. You may collect in from the warden office, when available.</p><br/>
<p id="roomsList">
<?php
$i = 0; 
while(!empty($roomlist[$i])){
	echo $roomlist[$i]."<br/>";
	$i++;
}
 ?>
</p><br/><br/>
<h2>Admin Login</h2>
<form action="admin/mailBox/index.php" method="post">
Access Code: <input type="password" name="accesscode" />
<input type="submit" value="Login" />
</form><br/>
