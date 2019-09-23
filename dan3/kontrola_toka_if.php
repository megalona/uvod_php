<?php


$a = 1;
$b = 5;


//operator usporedbe jednakosti
//uspoređuje vrijenost podatka,ali ne uspoređje tip podatka
if ($a == 1){
    echo "Isti je";
}
echo '<br>';
//operator usporedbe identičnosti
//uspoređuje vrijednost podatka i koji je tip podatka
if ($a === 1){
    echo "Isti tip podatka";
}
echo '<br>';

//operator nejednakosti uspoređuje vrijenost, ali ne i tip podatka

if ($a != $b) {
   echo ' nisu jednaki';
}

echo '<br>';

//operator neidentičnosti uspoređuje tip i vrijednost
if ($a !== $b) {
    echo 'različit je tip';
 }

