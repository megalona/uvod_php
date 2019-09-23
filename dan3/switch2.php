<?php

$vrijeme = time();

echo $vrijeme;

echo date('d.m.Y H:i:s', $vrijeme);

echo date('D',$vrijeme);

//Zad1: Napisati kod da kad se pokrene ispiše u kojem smo kvartalu godine na temelju trenutnog vremena

//Zad2: Napraviti kod da kad se pokrene ispiše koji je dan na temelju trenutnog vrmenea

$dan = date('N');

switch ($mjesec) {
    case 1:
        echo 'Danas je ponedjeljak';
        break;
    case 2:
        echo 'Danas je utorak';
        break;
    case 3:
        echo 'Danas je srijeda';
        break;
    case 4:
        echo 'Danas je četvrtak';
        break;
    case 5:
        echo 'Danas je petak';
        break;
    
    default:
        # code...
        break;
}

 $dan = date('l'); // za koji je dan u tjednu tekstom, može se ispisati npr. da case riješenja busu (Monday za case 1, Tuseday za case 2....itd)