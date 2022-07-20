<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,300)) {
    $pisah = explode("|", $isi);    
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Tempat lahir </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Tanggal lahir </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Jenis kelamin </td><td>: $pisah[4]</td></tr>";
    echo "<tr><td>Agama </td><td>: $pisah[5]</td></tr>";
    echo "<tr><td>No telepon </td><td>: $pisah[6]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[7]</td></tr>";
    echo "<tr><td>Sosial media </td><td>: $pisah[8]</td></tr>
    <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}


echo "</table>";
echo "<a href=bukutamu.html> Klik Disini </a> Isi Form Buku Tamu <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>" ;
echo "<a href=kalkulator.html> Klik Disini </a> Untuk Mengakses Kalkulator Sederhana <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
echo "<a href=kalender.php> Klik Disini </a> Untuk Mengakses Kalender <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
echo "<a href=home.html> Klik Disini </a> Untuk Kembali ke Home <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";


?>