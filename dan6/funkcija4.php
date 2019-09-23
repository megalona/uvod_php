<?php

function autor($autor){

    $autor_array = explode(',', $autor); // po čemu se želi odvojiti funckija i druga vrijednost je u čemu
    // print_r($autor_array)
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    $ime_slovo = strtoupper(substr($ime, 0, 1));  //u velika slova
    $prezime = ucfirst(strtolower($prezime));
    return $ime_slovo. '. ' .$prezime;

}

echo autor('pEric,pEro');
// P.Peric je format koji želimo da nam funkcija vrati

echo '<br>';
echo autor('markic,MARKO');