<?php

namespace Convertisseur;

use Convertisseur\Article;

class Convertisseur
{
    private $article;
    private $deviseFinal;
    private $devise = [
        "EUR" => [
            "GBP" => 0.87295,
            "USD" => 1.2234
        ],
        "GBP" => [
            "EUR" => 1.13470,
            "USD" => 1.2234
        ],
        "USD" => [
            "GBP" => 0.780704,
            "EUR" => 0.885957
        ]
    ];

    public function __construct($article, $deviseFinal)
    {
        $this->article = $article;
        $this->deviseFinal = $deviseFinal;
    }

    public function convertisseur()
    {
        $this->montantDeviseFinal = $this->article->getMontantDeviseDeBase() * $this->devise[$this->article->getDeviseDeBase()][$this->deviseFinal];
        return $this->montantDeviseFinal;
    }
}
