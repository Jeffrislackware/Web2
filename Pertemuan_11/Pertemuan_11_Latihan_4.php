<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysql_select_db("Universitas", $Connect);
	mysql_query("INSERT INTO Tabel_Mahasiswa (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')");
	mysql_query("INSERT INTO Tabel_Mahasiswa (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')");
	mysql_close($Connect);
?>