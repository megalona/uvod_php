<?php

$naziv = 'Algebra';

$duljina = strlen ('Algebra');

echo $duljina;

if ($duljina) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina >=5 && $duljina <= 10){
    echo 'Naziv je u zadanom  nizu između 5 i 10 znakova';
}else{
    echo 'Naziv je pre kratak';

}

if ($duljina > 10) {
    echo 'Naziv ima više od 10 znakova';
}elseif($duljina == 9){
    echo 'Naziv ima 9 znakova';
}
elseif($duljina == 8){
    echo 'Naziv ima 8 znakova';
}
elseif($duljina == 7){
    echo 'Naziv ima 7 znakova';}
    else{
    echo 'Naziv je pre kratak';

}



echo '<br>';
$a = '';
$b = '';

if (empty($a)) {
    if (empty($b)) {
        echo 'Varijabla b je prazna<br>';
        echo 'Varijabla a je prazna<br>';
    }else{
        echo 'Varijabla b NIJE prazna<br>';
        echo 'Varijabla a JE prazna<br>';
    }
    
}else{

    if (empty($b)) {
        echo 'Varijabla b je prazna<br>';
        echo 'varijabla a nije prazna<br>';
    } else {
        echo 'Varijabla a nije prazna<br>';
        echo 'varijabla b nije prazna<br>';
    }
    
}
if (empty($a) && empty ($b)){
    echo 'Varijabla b je prazna<br>';
    echo 'Varijabla a je prazna<br>';
}elseif (empty($a) && !empty($b)) {
    echo 'Varijabla b NIJE prazna<br>';
    echo 'Varijabla a JE prazna<br>';
}
elseif (!empty($a) && empty($b)) {
    echo 'Varijabla b je prazna<br>';
    echo 'Varijabla a NIJE prazna<br>';
}
elseif (!empty($a) && !empty($b)) {
    echo 'Varijabla b nije prazna<br>';
    echo 'Varijabla a nije prazna<br>';
}

