<html>
	<head>
		<title>Get Date<title>
	</head>
	<body>
		<center>
		<h1>
			<?php
				$Now = getdate();
				$Bulan = $Now ['month'];
				$Hari  = $Now ['mday'];
				$Tahun = $Now ['year'];
				$Jam   = $Now['hours'];
				if ($Jam <= 11) {
					echo "Selamat Pagi";
				} elseif ($Jam > 11 and $Jam <= 15) {
					echo "Selamat Siang";
				} elseif ($Jam > 15 and $Jam <= 18) {
					echo "Selamat Sore";
				} elseif ($Jam > 18) {
					echo "Selamat Malam";
				}
			?>
		</h1>
		<h2> Selamat Datang </h2>
		<h3> Sekarang Adalah Tanggal <?php echo "$Hari $Bulan $Tahun"; ?> </h3> 
	</body>
</html>