<?php

namespace Convertisseur;

Class Article
{
    private $articleName;
    public $montantDeviseDeBase;
    public $deviseDeBase;

    public function __construct( $articleName, $montantDeviseDeBase, $deviseDeBase) {
        $this->articleName = $articleName;
        $this->montantDeviseDeBase = $montantDeviseDeBase;
        $this->deviseDeBase = $deviseDeBase;
    }

    public function getArticleName(){
        return $this->articleName;
    }
    public function getMontantDeviseDeBase(){
        return $this->montantDeviseDeBase;
    }
    public function getDeviseDeBase(){
        return $this->deviseDeBase;
    }

}
