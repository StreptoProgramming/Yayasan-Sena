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
	<h2>Data Undangan</h2>
	<table border="1">
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
			<th>OPSI</th>
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
				<td>
					<a href="edit_undangan.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus_undangan.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<h3>TAMBAH DATA UNDANGAN</h3>
	<form method="post" action="tambah_aksi_undangan.php">
		<table>
			<tr>			
				<td>Tanggal Kedatangan</td>
				<td><input type="date" name="tgldatang" value="<?php echo date('Y-m-d'); ?>" required></td>
			</tr>
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
				<td>Keperluan</td>
				<td><input type="text" name="keperluan" required></td>
			</tr>
			<tr>			
				<td>Tanggal Acara</td>
				<td><input type="date" name="tglacara" value="<?php echo date('Y-m-d'); ?>" required></td>
			</tr>
			<tr>			
				<td>Jumlah Anak</td>
				<td><input type="number" name="jmlanak" value="1" required></td>
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
	<a href="../index.php">KEMBALI</a>
</body>

</html>