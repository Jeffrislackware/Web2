<?php
	require_once('Pertemuan_11_Latihan_1.php');
	// mysql_select_db("Universitas", $Connect);
	$Result=mysql_query("Universitas","Select * From Tabel_Mahasiswa");
	While($Data=mysql_fetch_row($Result)){
		echo "$Data[0] $Data[1] $Data[2] <br>";
	}
?>