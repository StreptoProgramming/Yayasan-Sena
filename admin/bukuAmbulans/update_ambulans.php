<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pengguna = $_POST['pengguna'];
$keperluan = $_POST['keperluan'];
$tujuan = $_POST['tujuan'];
$supir = $_POST['supir'];

if ($supir != '' && $pengguna != '') {
// update data ke database
mysqli_query($config,"update ambulans set nama='$nama', alamat='$alamat', pengguna='$pengguna', keperluan='$keperluan', tujuan='$tujuan', id_supir = '$supir' where no='$no'");
header("location:../index.php");
} else {
// mengalihkan halaman kembali ke index.php
header("location:../index.php?pesan=error");
}
?>