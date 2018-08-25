<?php include '../config.php'?>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<html>
	<head>
		<link rel="stylesheet" href="../css/sty.css">
		<link rel="stylesheet" href="../table.css">
	</head>

	<body>
		<div class="header">
			<img class="header" src="../image/re.jpeg" align="left">
			<span style="left: 250px; top: 20px; position: relative;"><a href="logout.php" style="text-decoration: none; color: black; "><input type="button" value="Logout"  class="buttoned" style="background-color: #34bc52;"></a></span>
		</div>

		<div class="con">

			<div class="kolkir">
				<div class="judul">Data Donasi</div>
				<img src="../icon/Icon Zakat.png">
				<button id="TmbhDataZ" class="buttoned"  >Tambah Data</button>
				<button id="LihatDataZ" class="buttoned"  >Lihat Data</button>
			</div>

			  <div id="ModalTmbhDataZ" class="modal">
			    <div class="modal-content">
			      <div class="modal-header">
			          <span class="closeBtn close1">&times;</span>
			          <h2>Tambah Data Donasi</h2>

			      </div>
			      <div class="modal-body">
			        <p></p>
				    <form method="post" action="donasi/tambah_aksi_donasi.php">
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
								<td><input type="radio" name="jnssumbangan" value="Shodaqoh" required>Shodaqoh</td>
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
									
						</table>
					
			      </div>
			      <div class="modal-footer">
			        <input type="submit" value="SIMPAN">
			        </form>
			      </div>
			    </div>
			  </div>

			  <div id="ModalLihatDataZ" class="modal">
			    <div class="modal-content">
			      <div class="modal-header">
			          <span class="closeBtn close2">&times;</span>
			          <h2>Lihat Data Donasi</h2>
			      </div>
			      <div class="modal-body">
			        <p></p>
				    <table id="viewTable">
						<tr>
							<th>Id</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Telp</th>
							<th>Jenis Sumbangan</th>
							<th>Keterangan</th>
							<th>Pilihan</th>
						</tr>
						<?php 
						include '../config.php';
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
									<a href="donasi/edit_donasi.php?no=<?php echo $d['no']; ?>"><input type="button" value="Edit"></a>
									<a href="donasi/hapus_donasi.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
								</td>
							</tr>
							<?php 
						}
						?>
					</table>
			      </div>
			      <div class="modal-footer">
			        <a href="donasi/print_donasi.php" style="text-decoration: none"><input type="button" value="Print"></a>
			      </div>
			    </div>
			  </div>



			<div class="clear"></div>
			<div class="kolkan">
				<button id="LihatDataS" class="buttoned" href="#">Lihat Data</button>
				<button id="TmbhDataS"class="buttoned" href="#">Tambah Data</button>
				
				<div class="pask">
					<div class="judulk">Data</div>
					<div class="judulk">Undangan</div>

					<img src="../icon/Icon Syukuran.png">
				</div>
				


				<div id="ModalTmbhDataS" class="modal">
			    <div class="modal-content">
			      <div class="modal-header">
			          <span class="closeBtn close3">&times;</span>
			          <h2>Tambah Data Undangan</h2>
			      </div>
			      <div class="modal-body">
			        <p></p>
			        <form method="post" action="bukuUndangan/tambah_aksi_undangan.php">
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
								<td>Pilih Ustadz</td>
								<td><select name="ustadz">
									<?php include '../config.php';
									$data = mysqli_query($config,"select * from ustadz");
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
						</table>
					
			      </div>
			      <div class="modal-footer">
			        <input type="submit" value="SIMPAN">
			       </form>
			      </div>
			    </div>
			  </div>

			  <div id="ModalLihatDataS" class="modal">
			    <div class="modal-content">
			      <div class="modal-header">
			          <span class="closeBtn close4">&times;</span>
			          <h2>Lihat Data Undangan</h2>
			      </div>
			      <div class="modal-body">
			        <p></p>
			        <table id="viewTable">
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
						<th>Pilihan</th>
					</tr>
					<?php 
					include '../config.php';
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
								<a href="bukuUndangan/edit_undangan.php?no=<?php echo $d['no']; ?>"><input type="button" value="Edit"></a>
								<a href="bukuUndangan/hapus_undangan.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
							</td>
						</tr>
						<?php 
					}
					?>
					</table>
			      </div>
			      <div class="modal-footer">
			        <a href="bukuUndangan/print_undangan.php" style="text-decoration: none"><input type="button" value="Print"></a>
			      </div>
			    </div>
			  </div>
			</div>

			
			<div class="clear"></div>
			<div class="kolkir">
				<div class="judul">Data</div>
				<div class="judul">Ambulans</div>
				<img src="../icon/Icon Ambulan.png">
				<button id="TmbhDataA" class="buttoned" href="#">Tambah Data</button>
				<button id="LihatDataA" class="buttoned" href="#">Lihat Data</button>
			
				<div id="ModalTmbhDataA" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close5">&times;</span>
				          <h2>Tambah Data Penyewaan Ambulans</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <form method="post" action="bukuAmbulans/tambah_aksi_ambulans.php">
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
										<?php 
										include '../config.php';
										$data = mysqli_query($config,"select * from supir");
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
							</table>
						
				      </div>
				      <div class="modal-footer">
				        <input type="submit" value="SIMPAN">
				        </form>
				      </div>
				    </div>
			  	</div>

				  <div id="ModalLihatDataA" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close6">&times;</span>
				          <h2>Lihat Penyewaan Ambulans</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <table id="viewTable">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Pengguna</th>
								<th>Keperluan</th>
								<th>Tujuan</th>
								<th>Supir</th>
								<th>Pilihan</th>
							</tr>
							<?php 
							include '../config.php';
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
										<a href="bukuAmbulans/edit_ambulans.php?no=<?php echo $d['no']; ?>"><input type="button" value="Edit"></a>
										<a href="bukuAmbulans/hapus_ambulans.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
									</td>
								</tr>
								<?php 
							}
							?>
						</table>
				      </div>
				      <div class="modal-footer">
				        <a href="bukuAmbulans/print_ambulans.php" style="text-decoration: none"><input type="button" value="Print"></a>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="kolkan">
				<button id="LihatDataD" class="buttoned" href="#">Lihat Data</button>
				<button id="TmbhDataD" class="buttoned" href="#">Tambah Data</button>
				
				<div class="pask">
					<div class="judulk">Tambah</div>
					<div class="judulk">Driver</div>

					<img src="../icon/Tambah Driver.png">
				</div>

				<div id="ModalTmbhDataD" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close7">&times;</span>
				          <h2>Tambah Data Driver</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <form method="post" action="tambahSupir/tambah_aksi_supir.php">
							<table>
								<tr>
									<td>Nama</td>
									<td><input type="text" name="nama" required></td>
								</tr>
								<tr>
									<td>Telp</td>
									<td><input type="text" name="telp" required></td>
								</tr>		
							</table>
						
				      </div>
				      <div class="modal-footer">
				        <input type="submit" value="SIMPAN">
				        </form>
				      </div>
				    </div>
			  	</div>

				  <div id="ModalLihatDataD" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close8">&times;</span>
				          <h2>Lihat Driver</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <table id="viewTable">
							<tr>
								<th>Id supir</th>
								<th>Nama</th>
								<th>Telp</th>
								<th>Pilihan</th>
							</tr>
							<?php 
							include '../config.php';
							$data = mysqli_query($config,"select * from supir");
							while($d = mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $d['id_supir']; ?></td>
									<td><?php echo $d['nama_supir']; ?></td>
									<td><?php echo $d['telp']; ?></td>
									<td>
										<a href="tambahSupir/edit_supir.php?id_supir=<?php echo $d['id_supir']; ?>"><input type="button" value="Edit"></a>
										<a href="tambahSupir/hapus_supir.php?id_supir=<?php echo $d['id_supir']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
									</td>
								</tr>
								<?php 
							}
							?>
						</table>
				      </div>
				      <div class="modal-footer">
				        <a href="tambahSupir/print_supir.php" style="text-decoration: none"><input type="button" value="Print"></a>
				      </div>
				    </div>
				  </div>
				
			</div>

			<div class="kolkir">
				<div class="judul">Tambah</div>
				<div class="judul">Ustad</div>
				<img src="../icon/Tambah Uztadz.png">
				<button id="TmbhDataU" class="buttoned" href="#">Tambah Data</button>
				<button id="LihatDataU" class="buttoned" href="#">Lihat Data</button>
				
				<div id="ModalTmbhDataU" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close9">&times;</span>
				          <h2>Tambah Data Ustad</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <form method="post" action="tambahUstadz/tambah_aksi_ustadz.php">
							<table>
								<tr>
									<td>Nama</td>
									<td><input type="text" name="nama" required></td>
								</tr>		
							</table>
						
				      </div>
				      <div class="modal-footer">
				        <input type="submit" value="SIMPAN">
				        </form>
				      </div>
				    </div>
			  	</div>

				  <div id="ModalLihatDataU" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close10">&times;</span>
				          <h2>Lihat Ustadz</h2>
				      </div>
				      <div class="modal-body">
				        <p></p>
				        <table id="viewTable">
							<tr>
								<th>Id Ustadz</th>
								<th>Nama</th>
								<th>Pilihan</th>
							</tr>
							<?php 
							include '../config.php';
							$data = mysqli_query($config,"select * from ustadz");
							while($d = mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?php echo $d['id_ustadz']; ?></td>
									<td><?php echo $d['nama_ustadz']; ?></td>
									<td style="text-align: middle;">
										<a href="tambahUstadz/edit_ustadz.php?id_ustadz=<?php echo $d['id_ustadz']; ?>"><input type="button" value="Edit"></a>
										<a href="tambahUstadz/hapus_ustadz.php?id_ustadz=<?php echo $d['id_ustadz']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
									</td>
								</tr>
								<?php 
							}
							?>
						</table>
				      </div>
				      <div class="modal-footer">
				        <a href="tambahUstadz/print_ustadz.php" style="text-decoration: none"><input type="button" value="Print"></a>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="clear"></div>
			<div class="kolkan">
				<button id="LihatDataT" class="buttoned" href="#">Lihat Data</button>
				<button id="TmbhDataT" class="buttoned" href="#">Tambah Data</button>
				
				<div class="pask">
					<div class="judulk">Buku</div>
					<div class="judulk">Tamu</div>

					<img src="../icon/Icon Syukuran.png">
				</div>

				<div id="ModalTmbhDataT" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close11">&times;</span>
				          <h2>Tambah Data Tamu</h2>
				      </div>
				      <div class="modal-body">
				        <form method="post" action="bukuTamu/tambah_aksi_tamu.php">
						<table>
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama" required></td>
							</tr>
							<tr>
								<td>Telp</td>
								<td><input type="text" name="telp" required></td>
							</tr>
							<tr>			
								<td>Tanggal</td>
								<td><input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required></td>
							</tr>
							<tr>
								<td>Maksud</td>
								<td><input type="text" name="maksud" required></td>
							</tr>
							<tr>
								<td>Tujuan</td>
								<td><input type="text" name="tujuan" required></td>
							</tr>
							<tr>
								<td>Rencana Kegiatan</td>
								<td><input type="text" name="rencana" required></td>
							</tr>	
						</table>
				      </div>
				      <div class="modal-footer">
				      	<input type="submit" value="SIMPAN">
				        </form>
				      </div>
				    </div>
			  	</div>

				  <div id="ModalLihatDataT" class="modal">
				    <div class="modal-content">
				      <div class="modal-header">
				          <span class="closeBtn close12">&times;</span>
				          <h2>Lihat Daftar Tamu</h2>
				      </div>
				      <div class="modal-body">
				        <table id="viewTable">
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
							include '../config.php';
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
										<a href="bukuTamu/edit_tamu.php?no=<?php echo $d['no']; ?>"><input type="button" value="Edit"></a>
										<a href="bukuTamu/hapus_tamu.php?no=<?php echo $d['no']; ?>" onclick="return confirm('Hapus data tersebut?')"><input type="button" value="Hapus"></a>
									</td>
								</tr>
								<?php 
							}
							?>
						</table>
				      </div>
				      <div class="modal-footer">
				        <a href="bukuTamu/print_tamu.php" style="text-decoration: none"><input type="button" value="Print"></a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</body>
	
	<script type="text/javascript" src="../js.js"></script> 
</html>
