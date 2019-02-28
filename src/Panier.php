<?php

namespace Convertisseur;

use Convertisseur\Article;
use Convertisseur\Convertisseur;

class Panier
{
    public $panier = [];

    public function __construct()
    {
        
    }

    public function ajouterArticle($article)
    {
        array_push($this->panier, $article);
        return $this->panier;
    }

    public function supprimerArticle($article)
    {
        // $this->panier = array_diff($this->panier, $article);182
        $key = array_search($article, $this->panier);
        if ($key !== false) {
            unset($this->panier[$key]);
        }
        // unset($this->panier[$article]);
        echo var_dump($this->panier);
        return $this->panier;
    }
    
    public function showPanier()
    {
        echo var_dump($this->panier);
        return $this->panier;
    }

    public function totalConvertisseur($deviseFinal)
    {
        $tabTotal = [];
        foreach ($this->panier as &$value) {
            $deviseArticle = $value->getDeviseDeBase();
            if( $deviseArticle !== $deviseFinal)
            {
                $convert = new Convertisseur($value, $deviseFinal);
                $value->montantDeviseDeBase = $convert->convertisseur();
                $value->deviseDeBase = $deviseFinal;
            }
            array_push($tabTotal, $value->getMontantDeviseDeBase());

        }
        $total = array_sum($tabTotal);
        echo 'La valeur total du panier est de '.$total.' '.$deviseFinal;
    }

}