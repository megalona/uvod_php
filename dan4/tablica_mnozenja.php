<?php

$a = 1;
$b = 1;
echo '<table border = "1">';
while ($a <= 10){
    echo '<tr>';
    while ($b <=10){
        echo '<td>'.$a*$b.'</td>';
        $b++;
    }
    echo '</tr>';
    $a++;
    $b = 1;
}
echo '</table>';