<?php
namespace Tests\unit\utils;

use PHPUnit\Framework\TestCase;
use Src\utils\CalculsDecimals;

class TestCalculsDecimalsTest extends TestCase
{

    private CalculsDecimals $calculsDecimals;
    private float $variable1;
    private float $variable2;

    // Given
    public function setUp(): void
    {
        parent:: setUp();
        $this->calculsDecimals = new CalculsDecimals();
        $this->variable1 = 4.0;
        $this->variable2 = 1.0;
    }

    // When
    public function testAddition(): void
    {
        $addition = $this->calculsDecimals->addition($this->variable1, $this->variable2);
        $expected = 5;
        //then
        $this->assertEquals($expected, $addition, "message: Addition");

    }

    public function testVariableType(): void
    {
        $this->assertIsFloat($this->variable1);
        $this->assertIsFloat($this->variable2);

    }

    public function testSubstraction()
    {
        $substraction = $this->calculsDecimals->substraction($this->variable1, $this->variable2);
        $expect = 3;
        $this->assertEquals($expect,$substraction);
        $this->assertEquals(-4, $this->calculsDecimals->substraction(8, 12), "message: Soustraction");
    }
    public function testMultiplication(): void
    {
        $multiplication = $this->calculsDecimals->multiplication($this->variable1, $this->variable2);
        $expect = 4;
        $this->assertEquals($expect,$multiplication, "message : Multiplication");
    }
    public function testDivision()
    {
        $division = $this->calculsDecimals->division($this->variable1, $this->variable2);
        $expect = 4;
        $this->assertEquals($expect,$division, "message : Division");
    }

}

;