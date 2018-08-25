<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$telp = $_POST['telp'];

// menginput data ke database
mysqli_query($config,"insert into supir values('','$nama', '$telp')");
 
// mengalihkan halaman kembali ke index.php
header("location:../index.php");



?>