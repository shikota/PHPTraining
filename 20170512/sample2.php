<?php
$year = 2004;
$month = 5;
$day = 15;

$format = "日本語では%04d年%02d月%02d日<br>";
printf($format, $year, $month, $day);

//値が複数ある場合引数が順番で並んでいないかもしれないので引数に番号をつけて順番を指定
//％の後に何番目の引数と交換するかを指定

$month = "May";
$format = "英語なら・・・%2\$s %3\$02d %1\$04d";
printf($format, $year, $month, $day);
?>
