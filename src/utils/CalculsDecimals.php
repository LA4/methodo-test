<?php

namespace Src\utils;

class CalculsDecimals
{
    public function addition(float $variable1, float $variable2): float
    {
        return $variable1 + $variable2;
    }

    public function substraction(float $variable1, float $variable2): float
    {
        return $variable1 - $variable2;
    }

    public function multiplication(float $variable1, float $variable2): float
    {
        return $variable1 * $variable2;
    }

    public function division(float $variable1, float $variable2): float
    {
        return $variable1 / $variable2;
    }
}
