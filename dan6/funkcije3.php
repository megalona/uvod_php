<?php

function potencija(&$val){   //referenca na varijablu

    $val = $val*$val;
}

$a = 2;
potencija($a);
echo $a;