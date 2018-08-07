<?php
// di sini bikin if isset($_SESSION["login_token"]) atau isset($_COOKIE["login_token"]), di dalemnya, cek dari database kalo token ada atau nggak, kalo ada dan sama dengan $_SESSION["login_token"] (atau isset($_COOKIE["login_token"])), berarti dia loginya valid, kalo gak valid redirect ke halaman login
$sql = "SELECT ...";// query buat ngambil token atau validasi dari database, gak tau gimana struktur databasenya hehe
if ($conn->query($sql) === TRUE) {
	// di sini cek if $sql == $_SESSION["login_token"], kalo sama, gak usah ngapa2in, kalo beda, redirect ke halaman login.php (header location)
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>