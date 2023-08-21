<?php

define("PI", 3.14);
const BRAND = "Glox";

if (true)
{
    echo PI . "\n";
    echo BRAND . "\n";

    // No se puede definir const dentro de un bloque
    // const SHOES = "Adidas";
    define('COLOR', 'black');

    // echo SHOES . "\n";
    echo COLOR . "\n";
}