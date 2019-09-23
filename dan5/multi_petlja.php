<?php

$korisnik1 = array ('ime' => 'Ivo','prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb');

$korisnik2 = array ('ime' => 'Pero','prezime' => 'Perić', 'dob' => 26, 'mjesto' => 'Zagreb');

$korisnik3 = array ();
$korisnik3['ime'] = 'Vanja';
$korisnik3['prezime'] = 'Vanjić';
$korisnik3['dob'] = 33;
$korisnik3['mjesto'] = 'Varaždin';

echo '<pre>';
print_r($korisnik1);
echo '</pre>';


$korisnici = array($korisnik1, $korisnik2, $korisnik3);

//dodat novog korisnika 

$korisnici[4]['ime'] = 'Iva';
$korisnici[4]['prezime'] = 'Ivić';
$korisnici[4]['dob'] = 44;
$korisnici[4]['mjesto'] = 'Gorica';

foreach ($korisnici as $korisnik){
    var_dump($korisnik);
}
echo '<br>';

foreach ($korisnici as $korisnik){          //dva foreacha za doć do info o polju
    echo '<br>';
    foreach ($korisnik as $value) {
       echo $value;
       echo '<br>';
    }
}

foreach ($korisnici as $korisnik){         
    echo '<br>';
    foreach ($korisnik as $key => $value) {
       if ($key == 'prezime')
       echo $value;
       echo '<br>';
    }
}
