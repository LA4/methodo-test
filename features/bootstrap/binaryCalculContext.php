<?php

use Behat\Behat\Context\Context;
use Behat\Step\Given;
use Behat\Step\Then;
use Behat\Step\When;
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
    }


    #[Given('two binary integers 4 and 1')]
    public function twoBinaryIntegers($a, $b): void
    {
        $this->a = (int)$a;
        $this->b = (int)$b;
    }

    #[When('I perform a binary AND operation')]
    public function iPerformABinaryAndOperation()
    {
        $this->result = $this->calculator->andBinaryCalcul($this->a, $this->b);
    }


    #[Then('the result should be 0')]
    public function theResultANDShouldBe($arg1): void
    {
        assertEquals(0, $this->result);
    }


    #[When('I perform a binary OR operation')]
    public function iPerformABinaryOROperation(): void
    {
        $this->result = $this->calculator->orBinaryCalcul($this->a, $this->b);
    }

    #[Then('the result should be 5')]
    public function theResultORShouldBe($arg1)
    {
        assertEquals(5, $this->result);
    }

    #[When('I perform a binary XOR operation')]
    public function iPerformABinaryXOROperation(): void
    {
        $this->result = $this->calculator->xorBinaryCalcul($this->a, $this->b);
    }

    #[Then('the result should be 5')]
    public function theResultXORShouldBe($arg1)
    {
        assertEquals(5, $this->result);
    }


}
