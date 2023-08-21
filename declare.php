<?php

function calculateTriangleArea(int $base, int $height, string $name)
{
    return "Hola $name, el area del triangulo es " . ($base * $height) / 2 . "!";
}

echo calculateTriangleArea(3, 15, "Rich");
echo "\n";

function add(int $n1, int $n2) : int
{
    return $n1 + $n2;
}

echo add("2", "2");
echo "\n";

class Dummy
{
    public string $sentence = "Esto es una prueba";
}

function isDummy(Dummy $any) : string
{
    return $any->sentence;
}

echo isDummy(new Dummy);
echo "\n";