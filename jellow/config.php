<?php
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	//$mysql_database = "dsquar_trinetr"; //paro create this DB name & import the photoupload.sql in this DB 
	$mysql_database = "dsource_jellow";
	$prefix = "";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
	mysql_select_db($mysql_database, $bd) or die("Could not select database");

	$con=mysql_connect("localhost","root","");
                  if(!$con){
                    die("Cannot connect:".mysql_error());
                  }
                  mysql_select_db("dsource_jellow",$con);
?>