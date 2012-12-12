<?php


if($_SERVER[REMOTE_ADDR]!='10.6.42.100' && $_SERVER[REMOTE_ADDR]!='10.6.14.5' && $_SERVER[REMOTE_ADDR]!='10.6.14.1' && $_SERVER[REMOTE_ADDR]!='10.6.14.2' && $_SERVER[REMOTE_ADDR]!='10.6.14.3' && $_SERVER[REMOTE_ADDR]!='10.6.14.4' && $_SERVER[REMOTE_ADDR]!='10.6.14.6' && $_SERVER[REMOTE_ADDR]!='10.6.14.7' && $_SERVER[REMOTE_ADDR]!='10.6.14.8'  && $_SERVER[REMOTE_ADDR]!='10.6.14.9') die("You are not allowed to use this page.");//change here

if($_POST['password']=="shubhakarsysad"){
$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db('hostel6',$con);
$r=mysql_query("select * from maint")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$maint_1=$result[0];
$maint_2=$result[1];
$maint_3=$result[2];
$maint_4=$result[3];
$r=mysql_query("select * from mess")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$mess_1=$result[0];
$mess_2=$result[1];
$mess_3=$result[2];

$r=mysql_query("select * from dram")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$dram_1=$result[0];
$dram_2=$result[1];
$dram_3=$result[2];


$r=mysql_query("select * from debate")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$debate_1=$result[0];
$debate_2=$result[1];
$debate_3=$result[2];

$r=mysql_query("select * from dance")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$dance_1=$result[0];
$dance_2=$result[1];
$dance_3=$result[2];

$r=mysql_query("select * from music")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$music_1=$result[0];
$music_2=$result[1];
$music_3=$result[2];

$r=mysql_query("select * from soc")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$soc_1=$result[0];
$soc_2=$result[1];



$r=mysql_query("select * from sport")  or die ("error".mysql_error());
$result=mysql_fetch_array($r);

$sport_1=$result[0];
$sport_2=$result[1];
$sport_3=$result[2];

echo "MAINT<br>";
echo "krishna:".$maint_1."<br>";
echo "shubham:".$maint_2."<br>";
echo "Mukesh:".$maint_3."<br>";
echo "Raghav:".$maint_4."<br>";

echo "<br>SPORTS<br>";
echo "Jaydeep:".$sport_1."<br>";
echo "Mohit:".$sport_2."<br>";
echo "Piyush:".$sport_3."<br>";

echo "<br>MESS<br>";
echo "Nitin:  yes  ".$mess_1."  no  ".$mess_2."   neutral  ".$mess_3."<br>";

echo "<br>SOC<br>";
echo "Animesh:".$soc_1."<br>";
echo "Rohit:".$soc_2."<br>";

echo "<br>DEBATE<br>";
echo "Arpit:  yes  ".$debate_1."  no  ".$debate_2."   neutral  ".$debate_3."<br>";

echo "<br>MUSIC<br>";
echo "Aakash:  yes  ".$music_1."  no  ".$music_2."   neutral  ".$music_3."<br>";

echo "<br>DRAM<br>";
echo "Amit:  yes  ".$dram_1."  no  ".$dram_2."   neutral  ".$dram_3."<br>";

echo "<br>DANCE<br>";
echo "Vamsi:  yes  ".$dance_1."  no  ".$dance_2."   neutral  ".$dance_3."<br>";
}
else{
	echo "<form action='./results.php' method='post'> <input type='password' name='password'><input type='submit'></form>";
}
?>
