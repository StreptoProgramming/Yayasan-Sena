<?php
include('./conf.php'); // buat ngecek di database nanti, kalo token yang ada di cookie/session browser valid atau nggak, kalo gak valid (berarti gak login), langsung redirect ke halaman login.php


?>
<html>
<head>

</head>
<body>
<a href='/view_data.php'>View data</a>
<br/>
Input data:
<br/>
<a href='/donasi.php'>Donasi</a>
<br/>
<a href='/buku_tamu.php'>Buku Tamu</a>
<br/>
<a href='/buku_undangan.php'>Buku Undangan</a>
<br/>
<a href='/ambulans.php'>Ambulans</a>
</body>
</html>