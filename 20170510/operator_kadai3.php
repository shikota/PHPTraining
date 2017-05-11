<?php
echo "<table border = 1>";
$j = 1;
for($i = 1;$i <= 10;$i++){
    echo "<tr>";
    if($j <= 10){
        $x = $i * $j;
        echo "<td>". $x ."</td>";
    }else {
        echo "<br/>";
    }
    echo "</tr>";
    $j++;
}
echo "</table>";
?>
