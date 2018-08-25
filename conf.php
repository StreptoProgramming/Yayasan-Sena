<?php
$servername = 'localhost'; // ganti jadi server yang ada di hosting
$dbname = 'dbalmuhajir';
$username = 'root'; // username phpmyadmin
$password = ''; // password phpmyadmin

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// gak usah diapa-apain
?>