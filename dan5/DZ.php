<?php

//napuniti polje s 10 elemenata
//ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na krakju ne smije imati zarez
//izbrisati prvi i zadnji element polja
//ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na krakju ne smije imati zarez
//sortirati polje uzlazno (od manjeg prema vecem)
//ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom, zadnja vrijednost na krakju ne smije imati zarez

$shopping_lista = array('luk','piletina','paprike','dumbir','cesnjak','tjestenina','vrhnje','salata','sol','papar');

/*foreach ($shopping_lista as $key => $value) {
    echo $value. ',';
}

echo '<br>';*/

for ($i=0; $i <9 ; $i++) {
    echo $shopping_lista[$i]. ',';
}
echo end($shopping_lista);

echo '<br>';
$shopping_lista = \array_diff_key($shopping_lista, [0 =>'luk',9 => 'papar']);

for ($i=1; $i <8 ; $i++) {
echo $shopping_lista[$i]. ',';
}
echo end($shopping_lista);

echo '<br>';

sort($shopping_lista);
for ($i=0; $i<7; $i++){
    echo $shopping_lista[$i]. ',';
}
echo end($shopping_lista);


