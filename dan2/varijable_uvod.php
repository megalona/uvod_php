<?php

echo "Neki probni tekst";

echo '<br>';

//Varijable

$ime = 'Aleksandar'; // -> ova vrsta podataka je String (niz znakova)
$dob = 34; // -> ova vrst podatka je INT, ne pise se pod navodnike
$masa = 97.8; // -> ova vrsta podatka je Float (decimalni)
$hobiji = array('jedrenje','arheologija','kupanje'); // -> polje podataka
$samac = true; //boolean (logička vrijednost)

echo $ime.'<br>'.$masa.' '; // Točka spaja stringove (konkatenacija)
echo $dob;

echo '<br>';

// echo $hobiji; // Array se ne moze ispisivati na ovaj nacin

echo $samac;
echo '<br>';

var_dump($ime);
echo '<br>';
var_dump($dob);
echo '<br>';
var_dump($hobiji);
echo '<br>';
var_dump($samac);
echo '<br>';

echo "Moje ime je $ime"; //ovo radi sa svime osim poljima i objektima
//ili
echo '<br>';
echo "Moje ime je ".$ime.".";

// echo 'Moje ime je $ime'; -------> nije moguce ovako s jednostrukim samo u ovom slucaju

$ime = 'Ivan';
echo $ime.'<br>';
$ime = 23;
var_dump($ime);

?>