<html>
	<head>
		<title>Penggunaan Switch - Case</title>
	</head>
	<body>
		Hari ini :
	<?Php
		$Day = date("l");
		Switch ($Day){
				Case "Sunday" ;
				Print("Minggu");
				print "Waktu Untuk Istirahat";
			Break;
			Case "Monday" ;
				Print("Senin <br>");
				print "Meeting Awal Minggu Jam 08.00";
			Break;
			Case "Tuesday" ;
				Print("Selasa <br>");
				print "Pembukaan Workshop Diklat";
			Break;
			Case "Wednesday" ;
				Print("Rabu <br>");
				print ("Seminar Launchig Window Vista Di JHCC");
			Break;
			Case "Thrusday" ;
				Print("Kamis <br>");
				print "Pertemuan Dengan Mahasiswa";
			Break;
			Case "Friday" ;
				Print("Jum’at <br>");
				print "Jogging bersama";
			Break;
			Default :
			Print("Sabtu <br>");
			print "Survey Harga Ke Dusit, Mangga Dua";
		}
	?>
</body>
</html>