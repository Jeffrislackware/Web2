<?php
	// Hostname Or IP Of Server
	$Servername='localhost';
	// Username And Password
	$DBUsername='Users';
	$DBPassword='Users@2020';
	$Database='drive';
	$Connect=mysql_connect ("$Servername","$DBUsername","$DBPassword","$Database");
	if (!$Connect){
		die('Could Not Connect: ' . mysql_error());
	}
?>