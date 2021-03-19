<html>
	<head>
		<title>Contoh Penggunaan UDF</title>
	</head>
	<body>
		<! Menentukan Form Input>
		<form >
			Masukkan Bilangan Pertama : <br>
			<input type="text" name="BilanganA" size=10><br>
			Masukkan Bilangan Kedua : <br>
			<input type="text" name="BilanganB" size=10><br>
			<input type="submit" value="Hitung">
		</form>
		<! Membandingkan 2 Buah Bilangan Yang Diinput>
		<?php
			$A=$_post["BilanganA"];
			$B=$_post["BilanganB"];
			Function Jumlah($A,$B){
				$Penjumlahan=$A + $B;
				Return $Penjumlahan;
			}
			Function Kurang($A,$B){
				$Pengurangan=$A - $B;
				Return $Pengurangan;
			}
			Function Kali($A,$B){
				$Perkalian=$A * $B;
				Return $Perkalian;
			}
			Function Bagi($A,$B){
				$Pembagian=$A / $B;
				Return $Pembagian;
			}
			Echo "<br>";
			Echo ("Bilangan Pertama : ");
			Echo $A;
			Echo "<br>";
			Echo ("Bilangan Kedua : ");
			Echo $B;
			Echo "<br><br>";
			Echo "Hasil Penjumlahan 2 Buah Bilangan ";
			Echo "<br>";
			$Penjumlahan=&Jumlah($A,$B);
			Printf( "Penjumlahan Antara : %d + %d = %d ",$A,$B,$Penjumlahan);
			Echo "<br><br>";
			Echo "Hasil Pengurangan 2 Buah Bilangan ";
			Echo "<br>";
			$Pengurangan=&Kurang($A,$B);
			Printf( "Pengurangan Antara : %d - %d = %d ",$A,$B,$Pengurangan);
			Echo "<br><br>";
			Echo "Hasil Perkalian 2 Buah Bilangan ";
			Echo "<br>";
			$Perkalian=&Kali($A,$B);
			Printf( "Perkalian Antara : %d * %d = %d ", $A, $B, $Perkalian);
			Echo "<br><br>";
			Echo "Hasil Pembagian 2 Buah Bilangan ";
			Echo "<br>";
			$Pembagian=&Bagi($A,$B);
			Printf( "Pembagian Antara : %d / %d = %d ",$A,$B,$Pembagian);
			Echo "<br><br>";
		?>
	</body>
</html>