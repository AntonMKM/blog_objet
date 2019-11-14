<?php
require 'modele/gestionArticles.php';
require 'class/articles.php';

class ArticleController 
{
	    function affichage(){
        $gestion = new GestionArticles();
        $affichage = $gestion->gestionAffichage();
        while($dataArticle = $affichage->fetch()){
        $articles[]= new Article($dataArticle);
        }
        
    }
}
?>