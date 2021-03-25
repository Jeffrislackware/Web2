<html>
	<head>
		<title>Buku Tamu By Zearch-Soft.com</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
	</head>
	<body>
		<?php
		require_once('Connection.php');
		// --- Fungsi Tambah Data (Create)
		function Tambah($SelectDB){
			if (isset($_POST['Cmd_Submit'])){
				$ID	     = time();
				$Nama	 = htmlentities($_POST['nama']);
				$Email	 = htmlentities($_POST['email']);
				$Website = htmlentities($_POST['website']);
				$Alamat	 = htmlentities($_POST['alamat']);
				$Kota	 = htmlentities($_POST['kota']);
				$Message = htmlentities($_POST['pesan']);
				$Tanggal = date('l-d-F-Y H:i:s');
				if(!empty($Nama) && !empty($Email) && !empty($Website) && !empty($Alamat) && !empty($Kota) && !empty($Message)){
					$Query = mysqli_query($SelectDB,"INSERT INTO Guest VALUES('$ID', '$Nama', '$Email', '$Website', '$Alamat', '$Kota', '$Message', '$Tanggal')");
					if($Query && isset($_GET['Action'])){
						if($_GET['Action'] == 'Create'){
							echo '<script language="javascript"> alert("Terima Kasih, Data Anda Berhasil Disimpan"); document.location="Index.php";</script>';
						}
					}
				}else{
					$Pesan ="<div id='Error'>Uppsss...! Failed To Save Incomplete Data Database ! </div>";
				}
			}
		?>
		<form action="" method="POST">
			<fieldset>
				<legend><h2>Tambah Data</h2></legend>
				<table border="1" cellpadding="10">
					<tr>
						<td>Nama Lengkap : </td> <td><input type="text" name="nama" placeholder="Jeffri Gunawan"/></td>
					</tr>
					<tr>
						<td>Email        : </td> <td><input type="text" name="email" placeholder="Jeffrislackware@zearch-soft.com" required /></td>
					</tr>
					<tr>
						<td>Website      : </td> <td><input type="text" name="website" placeholder="https://zearch-soft.com" /></td>
					</tr>
					<tr>
						<td>Alamat       : </td> <td><textarea name="alamat" rows="5" cols="50" placeholder="-" required></textarea></td>
					</tr>
					<tr>
						<td>Kota         :</td> <td><input type="text" name="kota" placeholder="Jakarta" required /></td>
					</tr>
					<tr>
						<td>Pesan		:</td> <td><textarea name="pesan" rows="5" cols="50" placeholder="Hy, Saya Sangat Senang Bisa Berkunjung" required></textarea></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="Cmd_Submit" value="Submit" />
							<input type="reset" name="Cmd_Cancel" value="Cancel" />
						</td>
					</tr>
					<tr>
						<p><?php echo isset($Pesan) ? $Pesan : "" ?></p>
					</tr>
				</table>
			</fieldset>
		</form>
		<?php 
		}
		// --- Tutup Fungsi Tambah Data
		
		// --- Fungsi Baca Data (Read)
		function Tampil($SelectDB){
			$No=1; $Query = mysqli_query ($SelectDB,"SELECT * FROM Guest");
		?>
			<fieldset>
				<legend><h2>Data Buku Tamu</h2></legend>
				<table border="1" cellpadding="10">
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>Website</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Pesan</th>
						<th>Tanggal</th>
						<th colspan="2">Action</th>
					</tr>
			<?php
			while($Data = mysqli_fetch_array($Query)){
			?>
					<tr>
						<td><?php echo $No++; ?></td>
						<td><?php echo $Data['ID']; ?></td>
						<td><?php echo $Data['Nama']; ?></td>
						<td><?php echo $Data['Email']; ?></td>
						<td><?php echo $Data['Website']; ?></td>
						<td><?php echo $Data['Alamat']; ?></td>
						<td><?php echo $Data['Kota']; ?></td>
						<td><?php echo $Data['Pesan']; ?></td>
						<td><?php echo $Data['Tanggal']; ?></td>
						<td>
							<input type="button" name="Cmd_Update" value="Update" onclick="window.location.href='Index.php?Action=Update&Id=<?php echo $Data['ID']; ?>&Nama=<?php echo $Data['Nama']; ?>&Email=<?php echo $Data['Email']; ?>&Website=<?php echo $Data['Website']; ?>&Alamat=<?php echo $Data['Alamat']; ?>&Kota=<?php echo $Data['Kota']; ?>&Message=<?php echo $Data['Pesan']; ?>&Tanggal=<?php echo $Data['Tanggal']; ?>'" />
						</td>
						<td>
							<input type="button" name="Cmd_Delete" value="Delete" onclick="window.location.href='Index.php?Action=Delete&Id=<?php echo $Data['ID']; ?>; ?>'" />
						</td>
					</tr>
			<?php
			}
			?>
				</table>
			</fieldset>
			<?php
		}
		// --- Tutup Fungsi Baca Data (Read)
			
		// --- Fungsi Ubah Data (Update)
		function Ubah($SelectDB){
			
			// Ubah Data
			if(isset($_POST['Cmd_Change'])){
				$ID          = $_POST['Id'];
				$Nama	     = $_POST['nama'];
				$Email	     = $_POST['email'];
				$Website     = $_POST['website'];
				$Alamat      = $_POST['alamat'];
				$Kota        = $_POST['kota'];
				$Message     = $_POST['message'];
				$Tanggal     = $_POST['tanggal'];
				$Tanggal_New = date('l-d-F-Y H:i:s');
				if(!empty($Nama) && !empty($Email) && !empty($Website) && !empty($Alamat) && !empty($Kota) && !empty($Message)){
					$Change = mysqli_query($SelectDB,"UPDATE Guest SET Nama='".$Nama."',Email=".$Email.",Website=".$Website.",Alamat='".$Alamat."',Kota=".$CKota.",Pesan='".$Message."',Tanggal='".$Tanggal_New."' WHERE ID=$ID");
					if($Change && isset($_GET['Action'])){
						if($_GET['Action'] == 'Update'){
							header('location: Index.php');
						}
					}
				} else {
					$Pesan = "Data tidak lengkap!";
				}
			}
			// Tampilkan Form Ubah
			if(isset($_GET['Id'])){
			?>
			<a href="Index.php"> &laquo; Home</a> | 
			<a href="Index.php?Action=Create"> (+) Tambah Data</a>
			<hr>
			
		<form action="" method="POST">
			<fieldset>
				<legend><h2>Ubah Data</h2></legend>
				<table border="1" cellpadding="10">
					<tr>
						<td>ID : </td> <td><input type="text" name="Id" value="<?php echo $_GET['Id'] ?>" disabled /></td>
					</tr>
					<tr>
						<td>Nama Lengkap : </td> <td><input type="text" name="nama" placeholder="<?php echo $_GET['Nama'] ?>"/></td>
					</tr>
					<tr>
						<td>Email        : </td> <td><input type="text" name="email" placeholder="<?php echo $_GET['Email'] ?>" required /></td>
					</tr>
					<tr>
						<td>Website      : </td> <td><input type="text" name="website" placeholder="<?php echo $_GET['Website'] ?>" /></td>
					</tr>
					<tr>
						<td>Alamat       : </td> <td><textarea name="alamat" rows="5" cols="50" placeholder="<?php echo $_GET['Alamat'] ?>" required></textarea></td>
					</tr>
					<tr>
						<td>Kota         :</td> <td><input type="text" name="kota" placeholder="<?php echo $_GET['Kota'] ?>" required /></td>
					</tr>
					<tr>
						<td>Pesan		:</td> <td><textarea name="pesan" rows="5" cols="50" placeholder="<?php echo $_GET['Message'] ?>" required></textarea></td>
					</tr>
					<tr>
						<td>Tanggal		:</td> <td><input type="Text" name="tanggal" value="<?php echo $_GET['Tanggal'] ?>" disabled /></td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="Cmd_Change" value="Submit" />
							<input type="button" name="Cmd_Cancel" value="Delete" onclick="window.location.href='Index.php?Action=Delete&Id=<?php echo $_GET['Id'] ?>'" />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<p><?php echo isset($Pesan) ? $Pesan : "" ?></p>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
		<?php
			}
		}
		// --- Tutup Fungsi Update
		
		// --- Fungsi Delete
		function Hapus($SelectDB){
			if(isset($_GET['Id']) && isset($_GET['Action'])){
				$iD = $_GET['Id'];
				$QueryHapus = mysqli_query($SelectDB,"DELETE FROM Guest WHERE ID=".$iD);
				if($QueryHapus){
					if($_GET['Action'] == 'Delete'){
						header('location:Index.php');
					}
				}
			}
		}
// --- Tutup Fungsi Hapus


// ===================================================================

// --- Program Utama
if (isset($_GET['Action'])){
	switch($_GET['Action']){
					case "Create":
						echo '<a href="Index.php"> &laquo; Home</a>';
						Tambah($Connect);
					break;
					case "Read":
						Tampil($Connect);
					break;
					case "Update":
						Ubah($Connect);
						Tampil($Connect);
					break;
					case "Delete":
						Hapus($Connect);
					break;
					default:
					echo "<h3>Aksi <i>".$_GET['Action']."</i> Tidak Ada!</h3>";
						Tambah($Connect);
						Tampil($Connect);
				}
			} else {
				Tambah($Connect);
				Tampil($Connect);
			}

?>
</body>
</html>