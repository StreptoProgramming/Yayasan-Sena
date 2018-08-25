<?php 
// koneksi database
include '../../config.php';
 
// menangkap data id yang di kirim dari url
$id_supir = $_GET['id_supir'];
 
 
// menghapus data dari database
mysqli_query($config,"delete from supir where id_supir='$id_supir'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>