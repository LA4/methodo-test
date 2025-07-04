<?php

namespace Src\utils;

class CalculsBinaire
{
    // Calcul du And
    public function andBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a & $b;

        echo "Résultat du AND :" . $result . PHP_EOL;
        return $result;

    }

    public function orBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a | $b;

        echo "Résultat du OR :" . $result . PHP_EOL;
        return $result;

    }

    public function xorBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a ^ $b;

        echo "Résultat du XOR :" . $result . PHP_EOL;
        return $result;

    }

};
