<?php

for ($i=0; $i < 10 ; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        

        if ($j == 8){
            continue;
        }
        echo ' '.$j; // ovo se ne izvrši nego se ide na vanjsku petlju. Isto tako ima i continue 2 koji ga vraća skroz na vanjsku onu di je i
    }
    echo '<br>';
}