<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/election.css" />
<title>Hostel 6 Elections</title>
</head>

<body>

<?php
if(isset($_POST['username']))
{
	include("./functions.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	connect();
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$id = checklogin($username,$password);
	if($id == "")
	{
	?>
	Wrong username or password. You will be redirected to login page.
	<meta http-equiv="refresh" content="1;url=index.php" />
	<?php
	}
	else
	{
		$query = "select * from userinfo where id = '".$id."'";
		$res = mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($res) == 0) die("You dont belong to this hostel. Go away.");
		$studInfo = mysql_fetch_array($res);
		if($studInfo['voted'] == 0)
		{
			$pollid = "20708";
			$query = "select * from question where pollid = '".$pollid."'";
			$queslist = mysql_query($query) or die(mysql_error());
			
			for($i=1;$i<=mysql_num_rows($queslist);$i++)
			{
				$curques = mysql_fetch_array($queslist);
				$upperlimit = $curques['maxopt'];
				$choosenOption = $_POST[$curques['quesid']];
				if($upperlimit == 1) $set = "'".$choosenOption."'";
				else
				{
					$set = "'".$choosenOption[0]."'";
					for($i=1;$i<sizeof($choosenOption);$i++)
						$set= "'".$choosenOption[$i]."',".$set;
				}
				$query = "update `option` set votes = votes+1 where optionid in (".$set.")";
				mysql_query($query) or die(mysql_error());
			}
			
			$query = "update userinfo set voted = 1 where id = '".$id."'";
			mysql_query($query) or die(mysql_error());
			
			echo "Thank you! Your vote has been submitted!!!";
		}
		else
		{
			echo "My dear hexalite, You have already voted. We appreciate your enthusiasm, but you are not allowed to vote again.";
		}
	}
}
else
{
	?>
	<h2 align="center">Hostel-6 Elections 2011-12</h2> 
	<h3>Instructions</h3>
	<ul>
	   <li>Please note that neutral has been selected by default.</li>
	   <li>Please enter your ldap username and password to vote.</li>	
	<ul><br/><br/>
	
    
    <form action="index.php" method="post">
    		<div id="login">
			Username : <input type="text" name="username" value=""  /><br/>
			Password : <input type="password" name="password" value=""  /><br/>
			<input type="submit" value="Vote" />
		</div><br/>
	<center>
            <div class="question"><h3>Hostel General Secretary</h3><img src="images/rahul.png" height="100px" /><br/><br/>Rahul Sheth<br/>
        
                <div class="candidate">
                    <input type="radio" name="207082" value="2070822"  />Yes
                </div>
                <div class="candidate">
                    <input type="radio" name="207082" value="2070823"  />No
                </div>
                <div class="candidate">
                    <input type="radio" name="207082" value="2070827" checked="checked" />Neutral
                </div>
            </div>
        
        </center>
        <center>
            <div class="question"><h3>Sports Councillor</h3><img src="images/amit.png" height="100px" /><br/><br/>Amit Garg<br/>
                <div class="candidate">
                    <input type="radio" name="2070810" value="20708101"  />Yes
                </div>
                <div class="candidate">
                    <input type="radio" name="2070810" value="20708102"  />No
                </div>
                <div class="candidate">
        
                    <input type="radio" name="2070810" value="20708104" checked="checked" />Neutral
                </div>
            </div>
        </center>
        <center>
            <div class="question"><h3>Mess Councillor</h3><img src="images/prasun.png" height="100px" /><br/><br/>Prasun Dey<br/>
                <div class="candidate">
                    <input type="radio" name="2070812" value="20708121"  />Yes
                </div>
                <div class="candidate">
        
                    <input type="radio" name="2070812" value="20708122"  />No
                </div>
                <div class="candidate">
                    <input type="radio" name="2070812" value="20708123" checked="checked" />Neutral
                </div>
            </div>
        </center>
        <center>
            <div class="question"><h3>Maint Councillor</h3><img src="images/shubham.png" height="100px" /><br/><br/>Shubham Budhania<br/>
                <div class="candidate">
        
                    <input type="radio" name="2070813" value="20708131"  />Yes
                </div>
                <div class="candidate">
                    <input type="radio" name="2070813" value="20708132"  />No
                </div>
                <div class="candidate">
                    <input type="radio" name="2070813" value="20708133" checked="checked" />Neutral
                </div>
            </div>
        </center>
        <center>
        
            <div class="question"><h3>Cultural Councillor</h3><img src="images/vivek.png" height="100px" /><br/><br/>Vivek Bhargava<br/>
                <div class="candidate">
                    <input type="radio" name="2070811" value="20708111"  />Yes
                </div>
                <div class="candidate">
                    <input type="radio" name="2070811" value="20708112"  />No
                </div>
                <div class="candidate">
                    <input type="radio" name="2070811" value="20708113" checked="checked" />Neutral
                </div>
        
            </div>
        </center>
    </form>
	</div>
    
<?php
}
?>

</body>
</html>