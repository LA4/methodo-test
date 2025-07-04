<?php

namespace Src\utils;

include 'src/utils/CalculsDecimals.php';

class Calculator
{
    private CalculsDecimals $calculatrice;

    public function __construct()
    {
        $this->calculatrice = new CalculsDecimals();
    }

    public function readLinecalc($result): void
    {
        if ($result == "undefined") {
            $result = readline("chiffre : ");
        }

        $symbol = readline("symbole : ");
        if ($symbol == "=") {
            echo $result;
            return;
        }
        $chiffre2 = readline("chiffre2 : ");

        $this->makeCalc($result, $symbol, $chiffre2);
    }

    public function makeCalc($chiffre1, $symbol, $chiffre2): float
    {

        return match ($symbol) {
            "+" => $this->calculatrice->addition($chiffre1, $chiffre2),
            "-" => $this->calculatrice->substraction($chiffre1, $chiffre2),
            "*" => $this->calculatrice->multiplication($chiffre1, $chiffre2),
            "/" => $this->calculatrice->division($chiffre1, $chiffre2),
            default => 0,
        };
    }

}
