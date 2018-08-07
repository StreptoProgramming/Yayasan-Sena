<?php
include('./conf.php');
$sql = "SELECT ...";// query buat ngambil token atau validasi dari database, gak tau gimana struktur databasenya hehe
if ($conn->query($sql) === TRUE) {
	// di sini cek if $sql == $_SESSION["login_token"], kalo sama, header location (redirect) ke index, kalo gak sama gak lakukan apa2
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>