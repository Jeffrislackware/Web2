<?php
	// Hostname Or IP Of Server
	$Servername='localhost';
	// Username And Password
	$DBUsername='root';
	$DBPassword='';
	$Connect=mysqli_connect ("$Servername","$DBUsername","$DBPassword") or die ( " Not Able To Connect To Server . mysql_error()");
	if ($Connect){
		echo "OK....Connection Successful";
	}
?>