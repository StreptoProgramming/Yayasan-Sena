<?php 
// mengaktifkan session php
 
// menghubungkan dengan koneksi
include '../../checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pencatatan dan Pendataan Yayasan Al-Muhajir</title>
</head>
<body>
	<h3>EDIT DATA DONASI</h3>
 
	<?php
	include '../../config.php';
	$no = $_GET['no'];
	$data = mysqli_query($config,"select * from donasi where no='$no'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_donasi.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="no" value="<?php echo $d['no']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
				</tr>
				<tr>
					<td>Telp</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>" required></td>
				</tr>
				<tr>
					<td>Jenis Sumbangan</td>
					<td><input type="radio" name="jnssumbangan" value="Shodaqoh" required>Shodaqoh</td>
					<td>*<?php if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "kosong"){
							echo "Pilih Jenis Sumbangan";
						}
					}
					?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="jnssumbangan" value="Infaq">Infaq</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="jnssumbangan" value="Lain-lain">Lain-lain</td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 	<a href="../index.php">KEMBALI</a>
</body>
</html>