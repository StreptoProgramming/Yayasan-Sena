<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
$maksud = $_POST['maksud'];
$tujuan = $_POST['tujuan'];
$rencana = $_POST['rencana'];


// menginput data ke database
mysqli_query($config,"insert into buku_tamu values('','$nama','$telp','$tanggal','$maksud','$tujuan','$rencana')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");


?>
