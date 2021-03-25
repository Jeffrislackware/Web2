<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysqli_select_db($Connect,"Universitas");
	mysqli_query($Connect,"INSERT INTO Tabel_Mahasiswa (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')");
	mysqli_query($Connect,"INSERT INTO Tabel_Mahasiswa (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')");
	mysqli_close($Connect);
?>