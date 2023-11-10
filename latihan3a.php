<?php

function ganti_style($tulisan, $kelas) {
    $style = 'font-size: 28px; color: black; font-weight: bolder; font-style: italic;';
    return "<span class='$kelas' style='$style'>$tulisan</span>";
}

$tulisan = "Hello World! Here I Come!";
$kelas = "ganti_style";
echo ganti_style($tulisan,$kelas);
?>
