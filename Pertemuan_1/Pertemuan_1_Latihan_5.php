<?php
	// Ini Adalah Komentar Dalam Satu Baris
	/* Kalau Yang Ini, Komentar
	Dalam Banyak Baris, Yang Baru
	Akan Selesai Setelah Diakhiri
	Dengan */
?>
<html>
	<head>
		<title>Test Penyisipan PHP Pada HTML</title>
	</head>
	<body>
		Kapal Asing, Silakan Identifikasikan Diri Anda! <br>
		<?php
			// Berikut Ini Adalah Inisiasi Beberapa Variabel
			$namad = "Jean";
			$namat = "Luc";
			$namab = "Piccard";
			$nilai1=25;
			$nilai2=50;
			$hasil=$nilai1*$nilai2;
			$a=2;
			$b=3;
			$hsl=pow($a,$b);
		?>
		<b>Ini Adalah Kapal Federasi Planet USS Enterprise.<br>
		<?php
			echo "Saya $namab, $namad $namat $namab, Kapten Kapal.</b><br>";
			echo "$nilai1 x $nilai2 = $hasil<br>";
			echo "$a ^ $b = $hsl";
		?>
	</body>
</html>