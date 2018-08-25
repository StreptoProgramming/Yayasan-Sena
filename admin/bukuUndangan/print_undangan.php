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
	<h2>Data Undangan</h2>
	<table border="1" style="width: 100%;">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>Keperluan</th>
			<th>Tanggal Acara</th>
			<th>Jumlah Anak</th>
			<th>Ustadz</th>
			
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from buku_undangan inner join ustadz on buku_undangan.id_ustadz = ustadz.id_ustadz");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['no']; ?></td>
				<td><?php echo date('d F, Y', strtotime($d['tanggal'])); ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['keperluan']; ?></td>
				<td><?php echo date('d F, Y', strtotime($d['tanggal_acara']));?></td>
				<td><?php echo $d['jumlah_anak']; ?></td>
				<td><?php echo $d['nama_ustadz']; ?></td>
				
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