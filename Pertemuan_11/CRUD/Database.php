<?php
	require_once('Connection.php');
	$SQL="INSERT INTO Tabel_Mahasiswa (FirstName, LastName, Age) VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[Age]')";
	if (!mysql_query($SQL,$Connect)){
		die('Error : ' . mysql_error());
	}
	echo "1 Record Added";
	mysql_close($Connect);
?>