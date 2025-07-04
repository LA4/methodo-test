<?php

namespace Src\utils;

use Src\utils\CalculsDecimals;
include 'src/utils/CalculsDecimals.php';
class Calculator
{
    private CalculsDecimals $calculatrice ;

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

    private function makeCalc($chiffre1, $symbol, $chiffre2): void
    {

        switch ($symbol) {
            case "+":
                $result = $this->calculatrice->addition($chiffre1, $chiffre2);
                echo $result . "\n";
                $this->readLinecalc($result);
                break;
            case "-":
                $result = $this->calculatrice->substraction($chiffre1, $chiffre2);
                echo $result . "\n";
                $this->readLinecalc($result);
                break;
            case "*":
                $result = $this->calculatrice->multiplication($chiffre1, $chiffre2);
                echo $result . "\n";
                $this->readLinecalc($result);
                break;
            case "/":
                $result = $this->calculatrice->division($chiffre1, $chiffre2);
                echo $result . "\n";
                $this->readLinecalc($result);
                break;
            default:
                echo "Symbole non reconnu.";

        }
    }

}
