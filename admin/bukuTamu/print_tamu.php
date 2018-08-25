<?php 
// mengaktifkan session php
 
// menghubungkan dengan koneksi
include '../../checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pencatatan dan Pendataan Yayasan Al-Muhajir</title>
	<link rel="stylesheet" href="../../cssPrint.css">
</head>
<body>
	<h2>Data Tamu</h2>
	<table border="1" style="width: 100%;">
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

	<input type="button" onclick="myFunction();" style="float: middle;" value="Print" id="printPageButton"></input>

	<script>
	function myFunction() {
	    window.print();
	}
	</script>
</body>
</html>