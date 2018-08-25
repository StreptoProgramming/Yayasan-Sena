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
	<h3>EDIT DATA AMBULANS</h3>
 
	<?php
	include '../../config.php';
	$no = $_GET['no'];
	$data = mysqli_query($config,"select * from ambulans where no='$no'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_ambulans.php">
			<table>
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
					<td>Pengguna</td>
					<td><input type="radio" name="pengguna" value="Warga" required>Warga</td>
					<td>*<?php if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "kosong"){
								echo "Pilih Pengguna";
							}
						}
					?></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="pengguna" value="Humana Prima">Humana Prima</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="pengguna" value="Non-warga">Non-Warga</td>
				</tr>
				<tr>
					<td>Keperluan</td>
					<td><input type="text" name="keperluan" value="<?php echo $d['keperluan']; ?>" required></td>
				</tr>
				<tr>
					<td>Tujuan</td>
					<td><input type="text" name="tujuan" value="<?php echo $d['tujuan']; ?>" required></td>
				</tr>
				<tr>
					<td>Supir</td>
					<td><select name="supir">
						<option value="">Pilih Supir</option>
						<?php $data = mysqli_query($config,"select * from supir");
						while($d = mysqli_fetch_array($data)) {?>
							<option value="<?php echo $d['id_supir']?>"><?php echo $d['nama_supir']?></option>
						<?php } ?>
					</select></td>
					<td>*<?php if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "kosong"){
								echo "Pilih Supir";
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