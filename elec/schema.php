<?php




$con=mysql_connect('localhost','hostel6','hostel666');
if(!$con)
{
	die('Could not connect:'.mysql_error());
}


mysql_query("create database if not exists hostel6") or die ("syntax 
error");
mysql_select_db("hostel6",$con);

#creating table
mysql_query("create table if not exists roll (rollno varchar(20),voted int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists maint (maint_1 int,maint_2 int,maint_3 int,maint_4 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists mess (mess_1 int,mess_2 int,mess_3 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists soc (soc_1 int,soc_2 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists sport (sport_1 int,sport_2 int,sport_3 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists dram (dram_1 int,dram_2 int,dram_3 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists debate (debate_1 int,debate_2 int,debate_3 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists music (music_1 int,music_2 int,music_3 int);") or die ("syntax error ".mysql_error());
mysql_query("create table if not exists dance (dance_1 int,dance_2 int,dance_3 int);") or die ("syntax error ".mysql_error());


#validating tables
$result=mysql_query("select * from maint");
if(mysql_num_rows($result)!=0) die ("error TABLE ALREADY EXISTS");
#inserting rows

mysql_query("insert into maint values(0,0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into mess values(0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into music values(0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into debate values(0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into dance values(0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into soc values(0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into dram values(0,0,0);") or die ("syntax error ".mysql_error());
mysql_query("insert into sport values(0,0,0);") or die ("syntax error ".mysql_error());
