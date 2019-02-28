<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" src="css/style.css">
    <title>Document</title>
</head>
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Convertisseur\Convertisseur;
use Convertisseur\Article;
use Convertisseur\Panier;

$montant_article_1 = $devise_article_1 = $articleName_article_1 = $montant_article_2 = $devise_article_2 = $articleName_article_2 = $montant_article_3 = $devise_article_3 = $articleName_article_3 = "";
$panier = [];

$panier = new Panier();

if(isset($_POST['addArticle_1']))
{
    $montant_article_1 = $_POST["montant"];
    $devise_article_1 = $_POST["devise"];
    $articleName_article_1 = $_POST["articleName"];
    $article_1 = new Article( $articleName_article_1, $montant_article_1, $devise_article_1);
    $panier->ajouterArticle($article_1);
}
if(isset($_POST['addArticle_2']))
{
    $montant_article_2 = $_POST["montant"];
    $devise_article_2 = $_POST["devise"];
    $articleName_article_2 = $_POST["articleName"];
    $article_2 = new Article( $articleName_article_2, $montant_article_2, $devise_article_2);
    $panier->ajouterArticle($article_2);
}
if(isset($_POST['addArticle_3']))
{
    $montant_article_3 = $_POST["montant"];
    $devise_article_3 = $_POST["devise"];
    $articleName_article_3 = $_POST["articleName"];
    $article_3 = new Article( $articleName_article_3, $montant_article_3, $devise_article_3);
    $panier->ajouterArticle($article_3);
}

?>
<body>
    <form method="POST" action="index2.php">
        <input type="text" id="articleName" name="articleName" value="Nom de l'article">
        <br>
        <input type="text" name="montant" value="<?php echo $montant_article_1?>">
        <br>
        <select name="devise">
            <option value="EUR">Euros</option>
            <option value="GBP">Livres Sterling</option>
            <option value="USD">US Dollars</option>
        </select>
        <br>
        <button id="addArticle" name="addArticle_1">Ajouter un article au Panier</button>
    </form>
    <br>
    <form method="POST" action="index2.php">
        <input type="text" id="articleName" name="articleName" value="Nom de l'article">
        <br>
        <input type="text" name="montant" value="<?php echo $montant_article_2?>">
        <br>
        <select name="devise">
            <option value="EUR">Euros</option>
            <option value="GBP">Livres Sterling</option>
            <option value="USD">US Dollars</option>
        </select>
        <br>
        <button id="addArticle" name="addArticle_2">Ajouter un article au Panier</button>
    </form>
    <br>
    <form method="POST" action="index2.php">
        <input type="text" id="articleName" name="articleName" value="Nom de l'article">
        <br>
        <input type="text" name="montant" value="<?php echo $montant_article_3?>">
        <br>
        <select name="devise">
            <option value="EUR">Euros</option>
            <option value="GBP">Livres Sterling</option>
            <option value="USD">US Dollars</option>
        </select>
        <br>
        <button id="addArticle" name="addArticle_3">Ajouter un article au Panier</button>
    </form>
    <br>
</body>
</html>