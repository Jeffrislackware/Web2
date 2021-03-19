<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysql_select_db("Universitas"); // Memilih Database
	$Result=mysql_query("Select * From Tabel_Mahasiswa");
	While($Data=mysql_fetch_array($Result)){
		echo "$Data[FirstName] $Data[LastName] $Data[Age] <br>";
	}
?>