<?php
	$Domain="localhost";
	$Username="root";
	$Password="";
	$Database="Universitas";
	$Connect=mysqli_connect($Domain,$Username,$Password,$Database);
	if (!$Connect){
		die('Database Connection Failed: ' . mysql_error());
	}
?>