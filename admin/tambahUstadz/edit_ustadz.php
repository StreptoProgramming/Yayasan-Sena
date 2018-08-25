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
	<h3>EDIT DATA USTADZ</h3>
 
	<?php
	include '../../config.php';
	$id_ustadz = $_GET['id_ustadz'];
	$data = mysqli_query($config,"select * from ustadz where id_ustadz='$id_ustadz'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_ustadz.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_ustadz" value="<?php echo $d['id_ustadz']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama_ustadz']; ?>" required>
					</td>
				</tr>
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