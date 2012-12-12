<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uploader</title>
</head>


<body>
<?php
if(isset($_POST['file']) && isset($_POST['pass']))
{
	$pass = isset($_POST['pass']);
	if($pass != "hostel666") die("wrong password");
	
	$target_path = "./upload/";
	$target_path = $target_path . basename( $_FILES['file']['name']); 

	if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path))
	{
    echo "The file ".  basename( $_FILES['file']['name']). " has been uploaded";
	} 
	else
	{
    echo "There was an error uploading the file, please try again!";
	}
}
else
{
	?>
<form action="upload.php" method="POST">
<input type="file" name="file" /><br/>
<input type="password" name="pass"/><br/>
<input type="submit" value="upload"  /> </form>
<?php
}
?>
</body>
</html>
