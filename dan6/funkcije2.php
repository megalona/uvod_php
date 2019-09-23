<?php

$polje = [1,5,7,9,12,34];
$polje2 = [1,5,7,9,12];

function suma($a){

    $zbroj = 0;
    foreach ($a as $value) {
        $zbroj += $value;           //zbroj je zbroj+value
    }
    return $zbroj;
}

echo suma($polje);
echo '<br>';
echo suma($polje2);
