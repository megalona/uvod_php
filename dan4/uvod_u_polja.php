<?php

$cipele = array();

$cipele[0] = 'Gucci';   //indeksna polja, ključevi su indeksi, postoje i asocijativna di su ključevi stringevi
$cipele[1] = 'Adidas';
$cipele[2] = 'Nike';
$cipele[3] = 'Puma';
$cipele[4] = 'Vans';



var_dump($cipele); //vraća tip podatka

echo '<pre>'; // tagovi za lijeppo ispisan array
print_r($cipele); //ispiše poolje, al služi za debug
echo '</pre>';

echo 'Element polja $cipele na drugom mjestu je' .$cipele[1].'<br>';

echo 'Polje $cipele sastoji se od ' .count($cipele). ' elemenata.';

$cipele2 = array();

$cipele2[] = 'Gucci';
$cipele2[] = 'Adidas';
$cipele2[] = 'Nike';
$cipele2[] = 'Puma';
$cipele2[] = 'Vans';

$cipele3 = array('Gucci', 'Adidas', 'Nike', 'Puma', 'Vans');

$cipele4 = ['Gucci', 'Adidas', 'Nike', 'Puma', 'Vans'];

$cipele5 = [1 => 'Gucci', 12 => 'Adidas', 23 => 'Nike', 54 =>'Puma', 65=> 'Vans'];
var_dump($cipele);
echo '<br>';
echo '<br>';

for ($i=0; $i <= 4; $i++) { 
    echo $cipele[$i]. '<br>';
}

echo '<br>';
echo '<br>';


for ($i=0; $i < count($cipele); $i++)
 {
      echo $cipele2[$i]. '<br>';
    
    }
    echo '<br>';
    echo '<br>';

foreach ($cipele5 as $key => $value) {     //da ispiše ključ i vrijednost
    echo $key . '-'. $value.'<br>';
}

