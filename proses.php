<?php 

echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt", "a+");
	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
	$sosial = $_POST['sosial'];
fputs($fp,"$nama_lengkap|$alamat|$tempat_lahir|$tanggal_lahir|$jk|$agama|$no_telepon|$email|$sosial\n");
fclose($fp);

echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=bukutamu.html>Isi Buku Tamu</a><br>";
echo "<a href=lihat.php>Lihat Buku Tamu</a><br>";


?>