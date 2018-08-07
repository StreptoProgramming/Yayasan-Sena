<?php
$servername = "localhost"; // ganti jadi server yang ada di hosting
$username = "username"; // username phpmyadmin
$password = "password"; // password phpmyadmin

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// gak usah diapa-apain
?>