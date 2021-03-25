<?php
	require_once('Connection.php');
	if (!$Connect){
		die('Could not connect: ' . mysql_error());
	}
	$Proses = mysqli_query($Connect,"UPDATE Mahasiswa SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
	mysqli_close($Connect);
	echo "Data Berhasil Diperbarui";
?>