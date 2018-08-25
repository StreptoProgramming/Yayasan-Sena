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
	<h3>EDIT DATA SUPIR</h3>
 
	<?php
	include '../../config.php';
	$id_supir = $_GET['id_supir'];
	$data = mysqli_query($config,"select * from supir where id_supir='$id_supir'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_supir.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="no" value="<?php echo $d['id_supir']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama_supir']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Telp</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>" required></td>
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