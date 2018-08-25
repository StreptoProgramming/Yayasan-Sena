<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jnssumbangan = $_POST['jnssumbangan'];
$keterangan = $_POST['keterangan'];

if($jnssumbangan != ''){
// update data ke database
mysqli_query($config,"update donasi set nama='$nama', alamat='$alamat', telp='$telp', jenis_sumbangan='$jnssumbangan', keterangan='$keterangan' where no='$no'");
header("location:../index.php");
 } else {
// mengalihkan halaman kembali ke index.php
header("location: ../index.php?pesan=error");
 }
?>