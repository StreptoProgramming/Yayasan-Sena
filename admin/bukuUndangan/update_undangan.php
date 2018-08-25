<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['no'];
$tgldatang = $_POST['tgldatang'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$keperluan = $_POST['keperluan'];
$tglacara = $_POST['tglacara'];
$jmlanak = $_POST['jmlanak'];
$ustadz = $_POST['ustadz'];

if ($ustadz != '') {
// update data ke database
mysqli_query($config,"update buku_undangan set tanggal='$tgldatang', nama='$nama', alamat = '$alamat', telp='$telp', keperluan='$keperluan', tanggal_acara = '$tglacara', jumlah_anak = '$jmlanak', id_ustadz = '$ustadz' where no='$no'");
header("location:../index.php");
 } else {
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 }
?>