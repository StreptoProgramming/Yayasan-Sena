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
	<h3>EDIT DATA Undangan</h3>
 
	<?php
	include '../../config.php';
	$no = $_GET['no'];
	$data = mysqli_query($config,"select * from buku_undangan where no='$no'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_undangan.php">
			<table>
				<tr>			
					<td>Tanggal Kedatangan</td>
					<td><input type="date" name="tgldatang" value="<?php date('d F, Y', strtotime($d['tanggal'])); ?>" required></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="no" value="<?php echo $d['no']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
				</tr>
				<tr>
					<td>Telp</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>" required></td>
				</tr>
				<tr>
					<td>Keperluan</td>
					<td><input type="text" name="keperluan" value="<?php echo $d['keperluan']; ?>" required></td>
				</tr>
				<tr>			
					<td>Tanggal Acara</td>
					<td><input type="date" name="tglacara" value="<?php date('d F, Y', strtotime($d['tanggalacara'])); ?>" required></td>
				</tr>
				<tr>			
					<td>Jumlah Anak</td>
					<td><input type="number" name="jmlanak" value="<?php echo $d['jmlanak']; ?>" required></td>
				</tr>
				<tr>
					<td>Ustadz</td>
					<td><select name="ustadz">
						<option value="">Pilih Ustadz</option>
						<?php $data = mysqli_query($config,"select * from ustadz");
						while($d = mysqli_fetch_array($data)) {?>
							<option value="<?php echo $d['id_ustadz']?>"><?php echo $d['nama_ustadz']?></option>
						<?php } ?>
					</select></td>
					<td>*<?php if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "kosong"){
							echo "Pilih Ustadz";
						}
					}
					?></td>
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