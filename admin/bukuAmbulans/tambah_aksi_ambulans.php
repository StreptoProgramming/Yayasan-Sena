<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pengguna = $_POST['pengguna'];
$keperluan = $_POST['keperluan'];
$tujuan = $_POST['tujuan'];
$supir = $_POST['supir'];
if ($supir != '' && $pengguna != '') {
// menginput data ke database
mysqli_query($config,"insert into ambulans values('','$nama','$alamat','$pengguna','$keperluan','$tujuan','$supir')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
} else {
header("location:../index.php?pesan=kosong");
}
?>