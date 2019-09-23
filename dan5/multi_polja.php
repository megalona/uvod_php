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


// ili $korisnici = (array ('ime' => 'Ivo','prezime' => 'Ivić', 'dob' => 25, 'mjesto' => 'Zagreb'),array ('ime' => 'Pero','prezime' => 'Perić', 'dob' => 26, 'mjesto' => 'Zagreb'))

echo '<pre>';
print_r($korisnici);
echo '</pre>';

var_dump($korisnici[0]['ime']);
?>

<table width = "50" border = "1">
    <!-- zaglavlje tablice -->
    <tr>
        <?php
        foreach ($korisnik3 as $key => $value):
            ?>
             <th><?php echo $key ?></th>
             <?php
                endforeach;
            ?>
        </tr>
        <!-- podaci o korisniku -->

        <tr>
                <td><?php echo $korisnik3 ['ime']?></td>
                <td><?php echo $korisnik3 ['prezime']?></td>
                <td><?php echo $korisnik3 ['dob']?></td>
                <td><?php echo $korisnik3 ['mjesto']?></td>
        </tr>
        <tr>
                <td><?php echo $korisnik3 ['ime']?></td>
                <td><?php echo $korisnik3 ['prezime']?></td>
                <td><?php echo $korisnik3 ['dob']?></td>
                <td><?php echo $korisnik3 ['mjesto']?></td>
        </tr>

        