<?php

$a = 1;

while($a <= 10){
    echo $a. '<br>';

    if ($a == 5) {
        echo ' -PET!<br>';
    }

    if ($a == 8){
        break;
    }
    $a++;
}

echo '<h1>DRUGI PRIMJER </h1>';

$a = 1;
$b = 1;

while($a <= 10){
    echo'<br>';

    while ($b <= 10){
        echo $b;

        if ($b == 4){
            break 2; //kad stavimo ovo 2 pored to znači da brejka obje petlje u kojima jesmo
        }
        $b++;
    }
    $b = 1;
    $a++;
}

