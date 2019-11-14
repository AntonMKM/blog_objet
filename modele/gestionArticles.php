<?php

class GestionArticles
{
	
	    function connexion(){
        try{
            $pdo = new PDO("mysql:host=localhost; dbname=blog_objet; charset=utf8", 'root', '');
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(Exception $e){
            echo 'Echec de la connexion:'.$e->getMessage();
        }
    }

     function gestionAffichage(){
        $pdo = $this->connexion();
        $requete = "SELECT * FROM articles";
        $affichage = $pdo->prepare($requete);
        $affichage->execute();
        return $affichage;
    }
      function posterArticle(Article $donnees){
        $pdo = $this->connexion();
        $requete = "INSERT INTO articles (auteur, titre, contenu, image) VALUES ( :auteur, :titre, :contenu, :image)";
        $insert = $pdo->prepare($requete);
        $insert->execute(['auteur'=>$donnees->getAuteur(),
                        'titre'=>$donnees->getTitre(),
                        'contenu'=>$donnees->getContenu(),
                        'image'=>$donnees->getImage()]);
    }
}
?>