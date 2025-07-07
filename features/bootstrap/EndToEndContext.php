<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Step\Given;
use Behat\Step\Then;
use Behat\Step\When;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;
use PHPUnit\Framework\Assert;

class EndToEndContext implements Context
{
    private HttpBrowser $client;
    private string $baseUrl;
    private string $displayedResult;
    private Crawler $crawler;
    #[Given('a calculator')]
    public function calculator(): void
    {
        $this->client = new HttpBrowser(HttpClient::create());
        $this->baseUrl = 'http://127.0.0.1:8000';
       $this->crawler = $this->client->request('GET', $this->baseUrl);
    }

    #[When('I input :number1, then :symbol, then :number2, and then "="')]
    public function iPutSomeCalculs(string $number1, string $symbol, string $number2): void
    {
        $this->client->submitForm('=', [
            'number1' => $number1,
            'number2' => $number2,
            'symbol' => $symbol,
        ]);

        // Récupère la nouvelle page après la soumission
        $this->crawler = $this->client->getCrawler();

        // Vérification de l'existence de l'élément
        if ($this->crawler->filter('p')->count() === 0) {
            throw new \Exception("Résultat non trouvé sur la page");
        }

        $this->displayedResult = $this->crawler->filter('p')->text();


    }

    #[Then('the result should be :expectedResult')]
    public function theResultShouldBe(string $expectedResult): void
    {
        $actualResult = str_replace('Résultat :', '', $this->displayedResult);
        $actualResult = trim($actualResult);
        Assert::assertSame($expectedResult, $actualResult, $actualResult ."," . $expectedResult . "ne sont pas identiques");
    }
}