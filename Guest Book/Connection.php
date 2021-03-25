<?php
	$Domain="localhost";
	$Username="root";
	$Password="";
	$Database="GuestDB";
	$Connect=mysqli_connect($Domain,$Username,$Password);
	if (!$Connect){
		die('Database Connection Failed: ' . mysql_error());
	}
	$SelectDB=mysqli_select_db($Connect,$Database);
	if (!$SelectDB){
		die('Failed To Select Database: ' . mysql_error());
	}
?>