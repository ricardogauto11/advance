<?php

function getUserInfo(string $name, string $lastname, int $age)
{
    echo "El nombre es $name, su apellido es $lastname y tiene $age anos";
}

getUserInfo(
    age: 12,
    lastname: "Gauto",
    name: "Ricardo"
);

echo "\n";