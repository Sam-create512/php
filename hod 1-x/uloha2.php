<?php
$pole = [];

for($i = 1; $i < 11; $i++){
    $pole[$i-1] = $i;
}

for($a = 0; $a <= 9; $a++){
    echo $pole[$a];
}

?>