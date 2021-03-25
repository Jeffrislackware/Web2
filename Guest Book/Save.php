<?php
	include("Connection.php");
	$ID      = $_POST['id'];
	$Nama    = $_POST['nama'];
	$Email   = $_POST['email'];
	$Website = $_POST['website'];
	$Alamat  = $_POST['alamat'];
	$Kota    = $_POST['kota'];
	$Message = $_POST['pesan'];
	$Query   = "INSERT INTO Guest (ID,Nama,Email,Website,Alamat,Kota,Message,Tanggal)VALUES('$ID', '$Nama', '$Email', '$Website', '$Alamat', '$Kota', '$Message', '$Tanggal')";
	mysqli_query($Connect,$Query) or die (mysqli_error());
	header('location:Index.php');
?>