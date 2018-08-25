<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$id_ustadz = $_POST['id_ustadz'];
$nama = $_POST['nama'];


// update data ke database
mysqli_query($config,"update ustadz set nama_ustadz='$nama' where id_ustadz='$id_ustadz'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");
?>