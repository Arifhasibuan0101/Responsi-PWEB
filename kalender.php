<?php
  $now = getdate(time());
  $time = mktime(0,0,0, $now['mon'], 1, $now['year']);
  $date = getdate($time);
  $dayTotal = cal_days_in_month(0, $date['mon'], $date['year']);

  //tampil kepala kalender dengan nama bulan
  print '<strong>' . $date['month'] . $date['year'] . '</strong>';

  print '<div class=blokbaris>';
  $hari=array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
  for ($i = 0; $i < 7; $i++) {    
  print "<div class='hari'>$hari[$i]</div>";
  }
  print '<div class=float_habis>&nbsp;</div></div>';

  for ($i = 0; $i < 6; $i++) {
    print '<div class=blokbaris>';
    for ($j = 1; $j <= 7; $j++) {
      $dayNum = $j + $i*7 - $date['wday'];

      //tampil cell dengan nomor hari, sorot jika hari ini
      print '<div';
      if ($dayNum > 0 && $dayNum <= $dayTotal) {
        print ($dayNum == $now['mday']) ? ' class=tgl_skrng>' : ' class=tgl>';
        print "$dayNum";
      }else{

        //tampil cell kosong jika tidak ada hari
        print ' class=tgl_blank> - ';
      }
      print '</div>';
    }
    print '<div class=float_habis>&nbsp;</div></div>';
    if ($dayNum >= $dayTotal && $i != 6)
    break;
  }
?>
<div align="center"><strong><a href="lihat.php"><br>::KEMBALI::</a></strong></div>
<link rel="stylesheet" type="text/css" href="kalender.css">