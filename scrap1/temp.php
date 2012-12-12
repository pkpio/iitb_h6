<html>
<head>
<title>Thanks for your feedback</title>

</head>
<body>

<hr  color="#698c00" noshade width="620">
<table align="center" width="620">
<tr><td>
<div>
<p>
<?php
//print "<b>".$_POST['name']."</b>";
$Handle=fopen("feedback.txt",'a');
$Data=$_POST["name"];
fwrite($Handle,"NAME:---");
fwrite($Handle,$Data);

$Data=$_POST["email"];
fwrite($Handle,"\n EMAIL-ID:---");
fwrite($Handle, $Data);

$Data=$_POST["quality"];
fwrite($Handle,"\n COMMENT ON Quality:---");
fwrite($Handle, $Data);

$Data=$_POST["show"];
fwrite($Handle,"\n COMMENT ON SHOWS:---");
fwrite($Handle, $Data);

$Data=$_POST["suggestion"];
fwrite($Handle,"\n COMMENT ON SUGGESTION:---");
fwrite($Handle, $Data);

fwrite($Handle,"\n ------------------");
fclose($Handle); 
print "<br> Thanks for your feedback";
?>
</p>
</div>
</td>
</tr>
</table>
</body>
</html>