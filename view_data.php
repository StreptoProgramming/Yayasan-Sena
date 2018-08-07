<?php
include('./conf.php'); // buat ngecek di database nanti, 
include('./logincheck.php'); // buat cek login
?>
<h1>VIEW DATA</h1>
<?php
$sql = "SELECT * FROM ...";// query masukin data ke database donasi

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>