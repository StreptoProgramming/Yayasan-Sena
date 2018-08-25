<?php 
// koneksi database
include '../../config.php';
 
// menangkap data id yang di kirim dari url
$id_ustadz = $_GET['id_ustadz'];
 
 
// menghapus data dari database
mysqli_query($config,"delete from ustadz where id_ustadz='$id_ustadz'");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");
 
?>