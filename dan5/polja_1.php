<?php

$boje = [];

$boje['boja1'] = 'žuta';
$boje['boja2'] = 'crvena';
$boje['boja3'] = 'zelena';
$boje['boja4'] = 'plava';


echo '<pre>';
print_r($boje);
echo '</pre>';

for ($i=1; $i <= count($boje); $i++) { 
    echo $boje['boja'.$i];
}
