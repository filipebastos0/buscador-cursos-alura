<?php

namespace Filipebastos0\BuscadorCursos;

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\ClientInterface;

class Buscador
{
    public function __construct(private ClientInterface $httpClient)
    {
    }

    public function buscar(string $url): array
    {
        $resposta = $this->httpClient->request('GET', $url);
        $html = (string) $resposta->getBody();
        $crawler = new Crawler($html);
        $elementosCursos = $crawler->filter('span.card-curso__nome');
        $cursos = [];

        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
