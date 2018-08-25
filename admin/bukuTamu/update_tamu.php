<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
$maksud = $_POST['maksud'];
$tujuan = $_POST['tujuan'];
$rencana = $_POST['rencana'];

// update data ke database
mysqli_query($config,"update buku_tamu set nama_tamu='$nama', telp='$telp', tanggal='$tanggal', maksud='$maksud', tujuan='$tujuan', rencana_kegiatan = '$rencana' where no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>