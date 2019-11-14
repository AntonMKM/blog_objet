<?php
include_once 'vue/Accueil.php';
require 'controller/articleController.php';
$article = new ArticleController;
$article->affichage();
echo $article->affichage();

?>