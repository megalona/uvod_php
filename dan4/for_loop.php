<?php

$a = 1;

while($a <= 10){
    echo $a;
    $a++;

}

echo '<br>';
echo '<br>';

for ($i = 1; $i <= 10; $i++){   //prvo ide varijabla koja broji, pa onda uvjet i  zatim inkremet, isto ko while...al manja vjerojatnost pogreške
    echo $i. '<br>';
}

echo '<br>';
echo '<br>';

for ($x=10; $x >= 1; $x --) { 
    echo $x. '<br>';
}




