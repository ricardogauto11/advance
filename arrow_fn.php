<?php

$atm = 0;

$add_money = fn($amount) => $atm + $amount;

echo $add_money(20);

// Arrow fn with closures
$ages = array(18, 15, 10, 21, 33, 8, 56, 44);
$majors = array_filter($ages, fn($age) => $age >= 18);

print_r($majors);
echo "\n";