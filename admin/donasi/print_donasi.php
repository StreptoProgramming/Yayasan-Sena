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
	<h2>Data Donasi</h2>
	<table border="1" style="width: 100%;">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>Jenis Sumbangan</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from donasi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['no']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telp']; ?></td>
				<td><?php echo $d['jenis_sumbangan']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				
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