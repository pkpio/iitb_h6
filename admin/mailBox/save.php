<?php
header('Refresh: 1; http://gymkhana.iitb.ac.in/~hostel6/#!/mailBox');
echo "saved successfully";

$fd=fopen("../../roomlist.txt",'w') or die("can't open file");
fwrite($fd,$_POST['data']);
fclose($fd);
?>
