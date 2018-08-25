<?php
include('./conf.php');
$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "SELECT * from admin where username='$username' and password='$password' ";// query buat ngambil token atau validasi dari database, gak tau gimana struktur databasenya hehe
if ($conn->query($sql) === TRUE) {
	// di sini cek if $sql == $_SESSION["login_token"], kalo sama, header location (redirect) ke index, kalo gak sama gak lakukan apa2
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	header("location:index.php");	
}
?>
