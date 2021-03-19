<?php
	require_once('Pertemuan_11_Latihan_1.php');
	mysql_select_db("Universitas"); // Memilih Database
	$Result=mysql_query("Select * From Tabel_Mahasiswa");
	$Hit=mysql_num_rows($Result);
	echo "Jumlah Record $Hit";
?>