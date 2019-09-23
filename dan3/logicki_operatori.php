<?php


$a = 15;
$b = 10;
$c = 5;

//logicko i (and)
if ($b < $a && $c < $a && 8<3 ) {
    echo 'uvjet je zadovoljen';
} else {
   echo 'uvjet nije zadovoljen';
}

echo '<br>';

//logicko OR (ili)
if ($b < $a && $a < $c || 8<3 ) {
    echo 'uvjet je zadovoljen';
} else {
   echo 'uvjet nije zadovoljen';
}
echo '<br>';


if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo 'Vrijednost varijable B nalazi se između $a i $c';
}

if ($a) {
    echo 'varijabla $a postoji';
}// logička negacija- pretvara true u false i false u true
if (!$a) {
    echo 'varijabla $a postoji';
}else {
    echo 'varijabla $a NE postoji';
}

if (!$a > $b) {
    echo 'varijabla $a postoji';
}else {
    echo 'varijabla $a NE postoji';
}