<?php 
	require_once('Connection.php');
	if (!$Connect){
		die('Could not connect: ' . mysql_error());
	}
	$Query = mysqli_query($Connect,"DELETE FROM Tabel_Mahasiswa WHERE LastName='Prabowo'"); 
	mysqli_close($Connect);
	echo "Data Berhasil Dihapus";
?> 