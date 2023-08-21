<?php

$numbers = array(2, 6, 4, 0, 8);

$by_two = array_map(function ($number) {
    return $number * 2;
}, $numbers);

print_r($by_two);

echo "\n";

$name = 'Motorola';

$fn = function () use ($name){
    echo $name;
};