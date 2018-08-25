<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$tgldatang = date('Y-m-d', strtotime($_POST['tgldatang']));
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$keperluan = $_POST['keperluan'];
$tglacara = date('Y-m-d', strtotime($_POST['tglacara']));
$jumlahanak = $_POST['jmlanak'];
$ustadz = $_POST['ustadz'];
if ($ustadz != '') {
// menginput data ke database
mysqli_query($config,"insert into buku_undangan values('','$tgldatang','$nama','$alamat','$telp','$keperluan','$tglacara','$jumlahanak','$ustadz')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
} else {
header("location:../index.php?pesan=kosong");
}
?>
