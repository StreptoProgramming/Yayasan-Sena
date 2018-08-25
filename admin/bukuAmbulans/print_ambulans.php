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
	<h2>Data Ambulans</h2>
	<table border="1" style="width: 100%;">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pengguna</th>
			<th>Keperluan</th>
			<th>Tujuan</th>
			<th>Supir</th>
			
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from ambulans inner join supir on ambulans.id_supir = supir.id_supir");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['no']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['pengguna']; ?></td>
				<td><?php echo $d['keperluan']; ?></td>
				<td><?php echo $d['tujuan']; ?></td>
				<td><?php echo $d['nama_supir']; ?></td>
				
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