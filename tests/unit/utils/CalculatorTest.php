<?php

namespace Tests\unit\utils;

use PHPUnit\Framework\TestCase;
use Src\utils\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    public function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function testDecryptStrings()
    {
        // on a une chaine de charactere
        // on veux mettre la chaine dans un tableau en separant chaque claclul
        // [(,(,48, +, 2,),*,5,)].
    }
}