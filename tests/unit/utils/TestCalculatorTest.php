<?php

namespace Tests\unit\utils;
use PHPUnit\Framework\TestCase;
use Src\utils\Calculator;
use Src\utils\CalculsDecimals;

class TestCalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $result = $this->calculator->makeCalc(5, '+', 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtraction()
    {
        $result = $this->calculator->makeCalc(10, '-', 4);
        $this->assertEquals(6, $result);
    }

    public function testMultiplication()
    {
        $result = $this->calculator->makeCalc(7, '*', 6);
        $this->assertEquals(42, $result);
    }

    public function testDivision()
    {
        $result = $this->calculator->makeCalc(12, '/', 4);
        $this->assertEquals(3, $result);
    }

    public function testInvalidOperator()
    {
        $result = $this->calculator->makeCalc(5, '%', 2);
        $this->assertEquals(0, $result);
    }
}
