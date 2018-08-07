<?php
include('./conf.php'); // buat ngecek di database nanti, 
include('./logincheck.php'); // buat cek login

if(isset($_POST['nama'])&&isset($_POST['tanggal'])){ // ngecek kalo data kesubmit atau nggak, kalo nggak ada data, berarti nginput doang, kalo ada, send ke database
	echo $_POST['nama']; // ini nanti ilangin aja
	
	$sql = "INSERT INTO ambulans (nama,tanggal) VALUES (".$_POST['nama'].",".$_POST['tanggal'].")";// query masukin data ke database ambulans

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('berhasil masukin data ke database');</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>
<h1>AMBULANS</h1>
<form action='' method='post'>
<input name='nama' type='text'/>
<input name='tanggal' type='text'/>
<input type='submit'/>
</form>