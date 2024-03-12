<?php

//fonction a mettre dans le fichier fonctionsReq.php

function moyenne2nombre(float $nb1, float $nb2): float
{
    return addition($nb1, $nb2) / 2;
}

function addition(float $a, float $b): float
{
    return $a + $b;
}

function soustraction(float $a, float $b): float
{
    return $a - $b;
}

function multiplication(float $a, float $b): float
{
    return $a * $b;
}

function division(float $a, float $b): float
{
    return $a / $b;
}

function estFemme($sexe): bool
{
    if ($sexe === "F") {
        return true;
    }
    return false;
}

function estAdulte($age): bool
{
    if ($age >= 18) {
        return true;
    }
    return false;
}

function ouiOuNon(string $phrase = null): bool
{
    while (true) {
        $reponse = readline($phrase . " - (o)ui/(n)on : ");
        if ($reponse === "o") {
            return true;
        } elseif ($reponse === "n") {
            return false;
        }
    }
}








?>