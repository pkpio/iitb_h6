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

$Data=$_POST["timing"];
fwrite($Handle,"\n COMMENT ON TIMING:---");
fwrite($Handle, $Data);

$Data=$_POST["route"];
fwrite($Handle,"\n COMMENT ON ROUTE:---");
fwrite($Handle, $Data);

$Data=$_POST["cost"];
fwrite($Handle,"\n COMMENT ON COST:---");
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