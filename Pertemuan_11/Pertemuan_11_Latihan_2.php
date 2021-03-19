<?php
	require_once('Pertemuan_11_Latihan_1.php');
	$DBName="Universitas";
	$Valid=mysql_query("CREATE DATABASE $DBName") or die("Couldn't Create Database : $DBName");
	if($Valid){
		echo "Database $DBName Created Successfully";
	}
?>