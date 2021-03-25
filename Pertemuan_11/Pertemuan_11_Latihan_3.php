<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysqli_select_db($Connect,"Universitas"); // Memilih Database
	// Membuat Tabel
	mysqli_query($Connect,"CREATE TABLE Tabel_Mahasiswa(NIM INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(NIM),FirstName VARCHAR(15),LastName VARCHAR(15),Age INT)");
	// Input Data
	$Insert=mysqli_query($Connect,"INSERT INTO Tabel_Mahasiswa(FirstName,LastName,Age) VALUES ('Anjar','Prabowo',25)");
?>