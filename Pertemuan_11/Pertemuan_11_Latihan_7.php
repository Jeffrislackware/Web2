<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysqli_select_db($Connect,"Universitas"); // Memilih Database
	$Result=mysqli_query($Connect,"Select * From Tabel_Mahasiswa");
	$Hit=mysqli_num_rows($Result);
	echo "<br> Jumlah Record $Hit";
?>