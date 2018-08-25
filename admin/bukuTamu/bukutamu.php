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
	<h2>Data Tamu</h2>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Telp</th>
			<th>Tanggal</th>
			<th>Maksud</th>
			<th>Tujuan</th>
			<th>Rencana Kegiatan</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from buku_tamu");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['no']; ?></td>
				<td><?php echo $d['nama_tamu']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo date('d F, Y', strtotime($d['tanggal'])); ?></td>
				<td><?php echo $d['maksud']; ?></td>
				<td><?php echo $d['tujuan']; ?></td>
				<td><?php echo $d['rencana_kegiatan']; ?></td>
				<td>
					<a href="edit_tamu.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus_tamu.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<h3>TAMBAH DATA BUKU TAMU</h3>
	<form method="post" action="tambah_aksi_tamu.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td><input type="text" name="telp" required></td>
			</tr>
			<tr>			
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required></td>
			</tr>
			<tr>
				<td>Maksud</td>
				<td><input type="text" name="maksud" required></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td><input type="text" name="tujuan" required></td>
			</tr>
			<tr>
				<td>Rencana Kegiatan</td>
				<td><input type="text" name="rencana" required></td>
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