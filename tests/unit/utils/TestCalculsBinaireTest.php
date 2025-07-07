<?php

namespace Tests\unit\utils;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;
use Src\utils\CalculsBinaire;
use Tests\TestProviders\BinaryCalculDataProvider;


class TestCalculsBinaireTest extends TestCase
{
    private CalculsBinaire $calculBinaire;

     public function setUp(): void
    {
        parent::setUp();
        $this->calculBinaire = new CalculsBinaire();
    }

    /**
     * Teste l'opération AND binaire.
     */
    #[DataProviderExternal(BinaryCalculDataProvider::class, 'andBinaryCalculProvider')]
    public function testAndBinaryCalcul(int $a, int $b, int $expectedResult): void
    {
        // WHEN
        $actualResult = $this->calculBinaire->andBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }

    /**
     * Teste l'opération OR binaire.
     */
    #[DataProviderExternal(BinaryCalculDataProvider::class, 'orBinaryCalculProvider')]
    public function testOrBinaryCalcul(int $a, int $b, int $expectedResult): void
    {
        // WHEN
        $actualResult = $this->calculBinaire->orBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }

    /**
     * Teste l'opération XOR binaire.
     */
    #[DataProviderExternal(BinaryCalculDataProvider::class, 'xorBinaryCalculProvider')]
    public function testXorBinaryCalcul(int $a, int $b, int $expectedResult): void
    {
        // WHEN
        $actualResult = $this->calculBinaire->xorBinaryCalcul($a, $b);

        // THEN
        $this->assertEquals($expectedResult, $actualResult);
    }
}