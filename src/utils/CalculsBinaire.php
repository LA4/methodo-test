<?php

namespace Src\utils;

class CalculsBinaire
{
    // Calcul du And
    public function andBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a & $b;

        return $result;

    }

    public function orBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a | $b;

        return $result;

    }

    public function xorBinaryCalcul(int $a, int $b): int
    {

        // Conversion en binaire native
        $result = $a ^ $b;

        return $result;

    }

}

;
