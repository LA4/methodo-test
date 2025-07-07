<?php

use Behat\Behat\Context\Context;
use Behat\Step\Given;
use Behat\Step\Then;
use Behat\Step\When;
use Src\utils\CalculsBinaire;
use function PHPUnit\Framework\assertEquals;

/**
 * Defines application features from the specific context.
 */
class BinaryCalculContext implements Context
{
    private int $a;
    private int $b;
    private int $result;
    private CalculsBinaire $calculator;

    public function __construct()
    {
        $this->calculator = new CalculsBinaire();
    }


    #[Given('two integers :a and :b')]
    public function twoBinaryIntegers($a, $b): void
    {
        $this->a = (int)$a;
        $this->b = (int)$b;
    }

    #[When('I perform a binary AND operation')]
    public function iPerformABinaryAndOperation(): void
    {
        $this->result = $this->calculator->andBinaryCalcul($this->a, $this->b);
    }


    #[Then('the result of AND should be 0')]
    public function theResultANDShouldBe(): void
    {
        assertEquals(0, $this->result);
    }


    #[When('I perform a binary OR operation')]
    public function iPerformABinaryOROperation(): void
    {
        $this->result = $this->calculator->orBinaryCalcul($this->a, $this->b);
    }

    #[Then('the result of OR should be 5')]
    public function theResultORShouldBe(): void
    {
        assertEquals(5, $this->result);
    }

    #[When('I perform a binary XOR operation')]
    public function iPerformABinaryXOROperation(): void
    {
        $this->result = $this->calculator->xorBinaryCalcul($this->a, $this->b);
    }

    #[Then('the result of XOR should be 5')]
    public function theResultXORShouldBe(): void
    {
        assertEquals(5, $this->result);
    }


}
