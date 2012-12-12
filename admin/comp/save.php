<?php
$update1Heading = '';
$update1Text = '';
$update2Heading = '';
$update2Text = '';
$update3Heading = '';
$update3Text = '';


if(isset($_POST['update1Heading']))$update1Heading = $_POST['update1Heading'];
if(isset($_POST['update1Text']))$update1Text = $_POST['update1Text'];
if(isset($_POST['update2Heading']))$update2Heading = $_POST['update2Heading'];
if(isset($_POST['update2Text']))$update2Text = $_POST['update2Text'];
if(isset($_POST['update3Heading']))$update3Heading = $_POST['update3Heading'];
if(isset($_POST['update3Text']))$update3Text = $_POST['update3Text'];

$data = $update1Heading.";".$update1Text.";".$update2Heading.";".$update2Text.";".$update3Heading.";".$update3Text;

$fd=fopen("../../updates/compUpdates.txt",'w') or die("can't open file");
fwrite($fd,$data);
fclose($fd);
header('Refresh: 2; http://gymkhana.iitb.ac.in/~hostel6');
echo "Successfully updated! Redirecting you...";
?>
