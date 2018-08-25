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
	<h2>Data Donasi</h2>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telp</th>
			<th>Jenis Sumbangan</th>
			<th>Keterangan</th>
			<th>OPSI</th>
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
				<td>
					<a href="edit_donasi.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus_donasi.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
 
	
	<br/>
	<br/>
	<h3>TAMBAH DATA DONASI</h3>
	<form method="post" action="tambah_aksi_donasi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td><input type="text" name="telp" required></td>
			</tr>
			<tr>
				<td>Jenis Sumbangan</td>
				<td><input type="radio" name="jnssumbangan" value="Shodaqoh">Shodaqoh</td>
				<td>*<?php if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "kosong"){
							echo "Pilih Jenis Sumbangan";
						}
					}
					?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="radio" name="jnssumbangan" value="Infaq">Infaq</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="radio" name="jnssumbangan" value="Lain-lain">Lain-lain</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<a href="../index.php">KEMBALI <br/></a>
	<?php if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "error"){
				echo "Data tidak berubah, silahkan update kembali";
			}
		}
	?>
</body>

</html>

