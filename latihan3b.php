<?php
$JawabanIsset= "Isset adalah fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur dan memiliki nilai (Tidak NULL).";
$JawabanEmpty= "Empty adalah fungsi yang digunakan untuk memeriksa apakah suuatu variabel kosong atau memiliki nilai yang dianggap kosong ataupun tidak terdefinisi.";

function soal ($style) {
  global $JawabanIsset, $JawabanEmpty;
  $hasil =' ';
  if ($style== 'Isset') {
    $hasil = $JawabanIsset;
  }
  if  ($style == 'Empty') {
    $hasil = $JawabanEmpty;
  }
  echo $hasil;
}

$style = 'Isset';
soal($style);
echo "<br><br>";

$style = 'Empty';
soal($style);

?>
