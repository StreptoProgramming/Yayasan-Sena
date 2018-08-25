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
	<h2>Data Ambulans</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pengguna</th>
			<th>Keperluan</th>
			<th>Tujuan</th>
			<th>Supir</th>
			<th>OPSI</th>
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
				<td>
					<a href="edit_ambulans.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus_ambulans.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<h3>TAMBAH DATA AMBULANS</h3>
	<form method="post" action="tambah_aksi_ambulans.php">
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
				<td>Pengguna</td>
				<td><input type="radio" name="pengguna" value="Warga">Warga</td>
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
			<tr>
				<td>Keperluan</td>
				<td><input type="text" name="keperluan" required></td>
			</tr>
			<tr>
				<td>Tujuan</td>
				<td><input type="text" name="tujuan" required></td>
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
	<a href="../index.php">KEMBALI <br/></a>
	<?php if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "error"){
				echo "Data tidak berubah, silahkan update kembali";
			}
		}
	?>
</body>

</html>