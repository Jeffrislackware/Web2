<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysql_select_db("Universitas"); // Memilih Database
	// Membuat Tabel
	$SQL = "CREATE TABLE Tabel_Mahasiswa(NIM INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(NIM),FirstName VARCHAR(15),LastName VARCHAR(15),Age INT)";
	mysql_query($SQL);
	// Input Data
	$Insert=mysql_query("INSERT INTO Tabel_Mahasiswa(FirstName,LastName,Age) VALUES ('Anjar','Prabowo',25)");
?>