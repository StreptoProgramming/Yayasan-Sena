<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$id_supir = $_POST['id_supir'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];

// update data ke database
mysqli_query($config,"update supir set nama_supir='$nama', telp='$telp' where id_supir='$id_supir'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");
?>