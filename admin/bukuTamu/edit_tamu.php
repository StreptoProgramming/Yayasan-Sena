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
	<h3>EDIT DATA TAMU</h3>
 
	<?php
	include '../../config.php';
	$no = $_GET['no'];
	$data = mysqli_query($config,"select * from buku_tamu where no='$no'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_tamu.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="no" value="<?php echo $d['no']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama_tamu']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Telp</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>" required></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td><input type="date" name="tanggal" value="<?php echo date('Y-m-d', strtotime($d['tanggal'])) ?>" required></td>
				</tr>
				<tr>
					<td>Maksud</td>
					<td><input type="text" name="maksud" value="<?php echo $d['maksud']; ?>" required></td>
				</tr>
				<tr>
					<td>Tujuan</td>
					<td><input type="text" name="tujuan" value="<?php echo $d['tujuan']; ?>" required></td>
				</tr>
				<tr>
					<td>Rencana Kegiatan</td>
					<td><input type="text" name="rencana" value="<?php echo $d['rencana_kegiatan']; ?>" required></td>
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