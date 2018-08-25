<?php 
// koneksi database
include '../../config.php';
 
// menangkap data id yang di kirim dari url
$no = $_GET['no'];
 
 
// menghapus data dari database
mysqli_query($config,"delete from ambulans where no='$no'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>