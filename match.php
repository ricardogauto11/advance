<?php

function getCountryName($country)
{
    return match ($country) {
        "mx" => "Mexico",
        "ar" => "Argentina",
        "py" => "Paraguay",
        default => "No se encuentran resultados"
    };
}

