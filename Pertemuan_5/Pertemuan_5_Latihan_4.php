<html>
	<head>
		<title>Contoh Counter</title>
	</head>
	<body>
	<?php
		$File="Counter.dat";
		If (file_exists($File))
		{
			$berkas = fopen($File,"r");
			$pencacah = (integer)trim(fgets($berkas, 255));
			$pencacah++;
			Fclose($berkas);
		}Else
		$pencacah = 1;
		// Simpan Pencacah
		$berkas = fopen($File,"w");
		Fputs($berkas, $pencacah);
		Fclose($berkas);
		// Tulis Ke Halaman Web
		Print("Anda Pengunjung Ke-$pencacah <br>\n");
	?>
	</body>
</html>