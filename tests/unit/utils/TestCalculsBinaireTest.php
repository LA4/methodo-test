<?php


namespace Tests\unit\utils;

use PHPUnit\Framework\TestCase;
use Src\utils\CalculsBinaire;

class TestCalculsBinaireTest extends TestCase
{
    private CalculsBinaire $calculBinaire;

    public function setUp(): void
    {
        parent::setUp();
        $this->calculBinaire = new CalculsBinaire();
    }

    public function testAndBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expectedResult = 0;

        // WHEN
        $actualResult = $this->calculBinaire->andBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testOrBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expectedResult = 5;

        // WHEN
        $actualResult = $this->calculBinaire->orBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testXorBinaryCalcul()
    {
        // GIVEN
        $a = 4;
        $b = 1;
        $expectedResult = 5;

        // WHEN
        $actualResult = $this->calculBinaire->xorBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }
}
