<?php


$korisnik1 = array ('ime' => 'Ivo','prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');
foreach ($korisnik1 as $key => $value) {
    echo $key.' je '. $value.'<br>';
}

echo '<pre>';
print_r($korisnik1);
echo '</pre>';

foreach ($korisnik1 as $key => $value) {
 if ($key == 'ime') {
 echo $value;
}}