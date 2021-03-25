<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysqli_select_db($Connect,"Universitas"); // Memilih Database
	$Result=mysqli_query($Connect,"Select * From Tabel_Mahasiswa");
	While($Data=mysqli_fetch_array($Result)){
		echo "<br> $Data[FirstName] $Data[LastName] $Data[Age]";
	}
?>