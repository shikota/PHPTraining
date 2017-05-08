<?php
$x ="5";
function local(){
    global $x;
    echo $x;
}
local();
?>
