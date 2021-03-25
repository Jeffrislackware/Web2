<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysqli_select_db($Connect,"Universitas");
	$Result=mysqli_query($Connect,"Select * From Tabel_Mahasiswa");
	While($Data=mysqli_fetch_row($Result)){
		echo " <br> $Data[0] $Data[1] $Data[2]";
	}
?>