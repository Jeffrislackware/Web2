<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP | www.e-learning.zearch-soft.com</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
	<body>
	<?php
	if(isset($_POST['Hitung'])){
		$Bil1 = $_POST['Bil1'];
		$Bil2 = $_POST['Bil2'];
		$Operasi = $_POST['Operasi'];
		switch ($Operasi) {
			case 'Tambah':
				$Hasil = $Bil1+$Bil2;
			break;
			case 'Kurang':
				$Hasil = $Bil1-$Bil2;
			break;
			case 'Kali':
				$Hasil = $Bil1*$Bil2;
			break;
			case 'Bagi':
				$Hasil = $Bil1/$Bil2;
			break; 
		}
	}
	?>
	<div class="kalkulator">
	<h2 class="judul">KALKULATOR</h2>
	<a class="brand" href="https://www.e-learning.zearch-soft.com"><center>www.e-learning.zearch-soft.com</center></a>
	<form method="post" action="Pertemuan_2_Latihan_3.php">
		<input type="text" name="Bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
		<input type="text" name="Bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
		<select class="opt" name="Operasi">
			<option value="Tambah">+</option>
			<option value="Kurang">-</option>
			<option value="Kali">X</option>
			<option value="Bagi">/</option>
		</select>
		<input type="submit" name="Hitung" value="Hitung" class="tombol"> 
		<?php if(isset($_POST['Hitung'])){ ?>
		<input type="text" disabled value="<?php echo $Hasil; ?>" class="bil">
		<?php }else{ ?>
		<input type="text" disabled value="0" class="bil">
		<?php } ?> 
	</form>
	</div>
	</body>
</html>