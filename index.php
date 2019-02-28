<?php

require_once __DIR__ . '/vendor/autoload.php';


use Convertisseur\Convertisseur;
use Convertisseur\Article;
use Convertisseur\Panier;

///// Création d'un nouvel article, qui a pour nom "Pantalon", pour montant "200" avec la devise euro "EUR"
$article_1 = new Article("Pantalon", 200, 'EUR');

///// Création d'une nouvelle variable qui permet d'appeler la fonction convertisseur() et de convertir le prix de
///// l'article "$article_1" en livres Sterling"GBP"
$livres = new Convertisseur($article_1, 'GBP');
$livres->convertisseur();

///// Création d'un nouveau panier
$panier = new Panier();

///// Ajout d'un article dans le panier créé
$panier->ajouterArticle($article_1);

///// Création d'un nouvel article, qui a pour nom "Pull", pour montant "90" avec la devise livre Sterling "GBP"
$article_2 = new Article("Pull", 90, 'GBP');
///// Ajout de l'article_2 dans le panier créé
$panier->ajouterArticle($article_2);

///// Création d'un nouvel article, qui a pour nom "Veste", pour montant "600" avec la devise US Dollars "USD"
$article_3 = new Article("Veste", 600, 'USD');
///// Ajout de l'article_3 dans le panier créé
$panier->ajouterArticle($article_3);

///// Création d'un nouvel article, qui a pour nom "Chaussures", pour montant "150" avec la devise US DOllars "USD"
$article_4 = new Article("Chaussures", 150, 'USD');
///// Ajout de l'article_4 dans le panier créé
$panier->ajouterArticle($article_4);
echo '<br>';

///// Fonction qui permet d'afficher les articles présent dans le panier
$panier->showPanier();
echo '<br>';

///// Fonction qui permet d'afficher le montant total du panier dans la même devise
$panier->totalConvertisseur('EUR');

///// Fonction qui permet de supprimer l'article 'article_2' du panier
$panier->supprimerArticle($article_2);