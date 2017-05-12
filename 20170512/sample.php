<?php
date_default_timezone_set('Asia/Tokyo');
$fp = fopen("count.txt", "r+");
$count = fgets($fp, 1000);
$count++;
$pieces = explode(",", $count);
$count = trim($count);
rewind($fp);
fputs($fp, $count);
fclose($fp);
echo 'あなたは'.$pieces[0].'人目のお客様です'."<br>";
$datetime = new Datetime();
$week = array("日", "月", "火", "水", "木", "金", "土");
if (date("w") == 0) {
    $w = "(日)";
}else if(date("w") == 1) {
    $w = "(月)";
}else if(date("w") == 2) {
    $w = "(火)";
}else if(date("w") == 3) {
    $w = "(水)";
}else if(date("w") == 4) {
    $w = "(木)";
}else if(date("w") == 5) {
    $w = "(金)";
}else $w = "(土)";
echo date("Y m/d $w H:i")."<br>";
echo $pieces[0];
?>
