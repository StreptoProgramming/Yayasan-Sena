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
	<h2>Data Ustadz</h2>
	<table border="1" style="width: 100%;">
		<tr>
			<th>Id Ustadz</th>
			<th>Nama</th>
			
		</tr>
		<?php 
		include '../../config.php';
		$data = mysqli_query($config,"select * from ustadz");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_ustadz']; ?></td>
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
