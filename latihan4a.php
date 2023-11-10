<?php
$warna = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan semua isi array dalam kalimat
echo "Balonku ada lima </br> Rupa-rupa warnanya </br>";

// Menggunakan implode untuk menggabungkan elemen-elemen array dengan koma dan spasi
echo implode(", ", $warna);

echo " dan biru <br> Meletus balon $warna[0] DOR!!! </br> Hatiku sangat kacau..";
?>