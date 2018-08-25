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
	<h2>Data Ustadz</h2>
	<table border="1">
		<tr>
			<th>Id Ustadz</th>
			<th>Nama</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from ustadz");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_ustadz']; ?></td>
				<td><?php echo $d['nama_ustadz']; ?></td>
				<td>
					<a href="edit_ustadz.php?id_ustadz=<?php echo $d['id_ustadz']; ?>">EDIT</a>
					<a href="hapus_ustadz.php?id_ustadz=<?php echo $d['id_ustadz']; ?>" onclick="return confirm('Hapus data tersebut?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<h3>TAMBAH DATA USTADZ</h3>
	<form method="post" action="tambah_aksi_ustadz.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<a href="../index.php">KEMBALI</a>
</body>

</html>