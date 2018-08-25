<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jnssumbangan = $_POST['jnssumbangan'];
$keterangan = $_POST['keterangan'];
if($jnssumbangan != ''){
// menginput data ke database
mysqli_query($config,"insert into donasi values('','$nama','$alamat','$telp','$jnssumbangan','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
} else {
header("location:../index.php?pesan=kosong");
}
?>