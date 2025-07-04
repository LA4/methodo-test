<?php

namespace Tests\integration\utils;

use PHPUnit\Framework\TestCase;
use Src\utils\CalculsDecimals;

class TestNestingCalculsTest extends TestCase
{
    private float $var1;
    private float $var2;
    private float $var3;
    private float $var4;
    private float $var5;
    private CalculsDecimals $calculsDecimals;

    public function setup(): void
    {
        $this->calculsDecimals = new CalculsDecimals();

        $this->var1 = 8;
        $this->var2 = 2;
        $this->var3 = 22;
        $this->var4 = 1;
        $this->var5 = 23;
    }

    public function testNestingCalculs(): void
    {
        $resultDivision = $this->calculsDecimals->division($this->var1,$this->var2);
        $resultMultiplication = $this->calculsDecimals->multiplication($this->var3,$this->var4);
        $resultAddition = $this->calculsDecimals->addition($resultDivision,$resultMultiplication);
        $resultSubtraction = $this->calculsDecimals->substraction($resultAddition,$this->var5);


        $this->assertEquals(3, $resultSubtraction, "WARNING PROBLEME CALCUL !");    }

}