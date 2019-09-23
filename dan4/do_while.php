<?php


$a = 1;


do{                 //ova petlja se izvrši bar jednom iako nužno ne zadovoljava uvjet, tek dođe do uvjeta
    echo $a. '<br>';
    $a++;

}while($a <= 10);

echo $a;

$b = 1;
$c = 1;

echo '<table border= "1">';
do{
    echo '<tr>
                <td>'.$c.'</td>
                <td>Hello!</td>
            </tr>';
        $b++;
        $c++;
    }while($b <=10);
echo '</table>';