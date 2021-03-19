<?php
	// Hostname Or IP Of Server
	$Servername='localhost';
	// Username And Password
	$DBUsername='Users';
	$DBPassword='Users@2020';
	$Connect=mysql_connect ("$Servername","$DBUsername","$DBPassword") or die ( " Not Able To Connect To Server . mysql_error()");
	if ($Connect){
		echo "OK....Connection Successful";
	}
?>