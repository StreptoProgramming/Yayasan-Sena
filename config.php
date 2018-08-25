<?php 
$config = mysqli_connect('localhost','root','','dbalmuhajir');
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>