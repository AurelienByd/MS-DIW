<?php

    // On met en 'require' le fichier PHP qui permet de se connecter à la base de données car il est indispensable à la bonne présentation du site
require 'connexion.php';

    // Le fichier DAO.php permet de stocker les fonctions pour utiliser les requêtes SQL sur les fichiers PHP
require 'DAO.php';

?>
<!DOCTYPE html>
    <!-- 'lang' permet de définir la langue utilisée pour l'élément -->
<html lang="fr">
<head>
        <!-- 'meta charset' détermine la façon dont le texte est transmis et stocké -->
    <meta charset="UTF-8">
        <!-- 'http-equiv' permet de modifier le comportement des serveurs ou des agents utilisateur par une valeur définie avec l'attribut 'content' -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 'meta name description' permet d'attribuer un résumé du contenu de la page, utile pour le référencement -->
    <meta name="description" content="Commandez un plat parmis une large sélection.">
        <!-- 'link rel(relation) icon' utilisé pour intégrer une icône pour l'onglet de la page -->
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
        <!-- 'link rel(relation) stylesheet' permet d'ajouter une feuille de style CSS à son fichier HTML -->
    <link rel="stylesheet" href="CSS/style.css">
        <!-- La balise 'title' utilisée pour nommer son site, le nom y est figuré dans l'onglet de la page, utilisé pour le référencement sur les moteurs de recherche -->
    <title>The District</title>
</head>
    <!-- Le parallax a été intégré uniquement sur la version ordi de la page d'accueil -->
<body class="parallax">
    <!-- En-tête de la page -->
    <header>
        <?php
        require "header.php";
        ?>
    </header>
            <!-- Sousentête pour afficher une vidéo de cuisine et une barre de recherche, présents uniquement sur la page d'accueil de la version ordi du site -->
        <div id="sous-top_accueil"><video src="/ASSETS/images_the_district/vegetables_-_14129(360p).mp4" class="video" autoplay loop muted></video>
                <div id="search">
                <input type="search" placeholder="Recherche..." id="barre_search" name="search">
                <button type="button" id="boutton">Chercher</button>
                </div>
        </div>
        <p id="p-accueil" class="color_titre_accueil">Catégories :</p>
        <div id="grille_catégories">

        <?php 
            // On appelle la fonction présente dans le fichier DAO.php
        get_categories();
            // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
        foreach($executerqt as $row): ?>
        
            <div class="cat_<?=$row["id"]?>" id="cat_<?=$row["id"]?>"><a href="categorie.php?id=<?=  $row["id"] ?>" title="<?= $row["libelle"] ?>"><p class="invtext">clique ici</p><p class="imptitre"><?= $row["libelle"] ?></p></a></div>

        <?php endforeach; ?>

        </div>
        <p class="color_titre_accueil">Plats :</p>
        <div id="grille_plats">

        <?php 
            // On appelle la fonction présente dans le fichier DAO.php
        get_plats_pop();
            // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
        foreach($executerqt as $row): ?>

            <div class="plat_<?=$row["id"]?>"><a href="plat.php?id=<?=  $row["id"] ?>" title="<?= $row["plat"] ?>"><p class="invtext">clique ici</p></a></div>

        <?php endforeach; ?>

        </div>
            <!-- Pied de la page -->
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
            <!-- On intègre ses fichiers JAVASCRIPT -->
        <script src="JAVASCRIPT/script.js"></script>
        <script src="JAVASCRIPT/searchbar.js"></script>
</body>
</html>