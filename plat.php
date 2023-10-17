<?php

    // On met en 'require' le fichier PHP qui permet de se connecter à la base de données car il est indispensable à la bonne présentation du site
require 'connexion.php';

    // Le fichier DAO.php permet de stocker les fonctions pour utiliser les requêtes SQL sur les fichiers PHP
require 'DAO.php';

?>
<!DOCTYPE html>
    <!-- 'Lang' permet de définir la langue utilisée pour l'élément -->
<html lang="fr">
<head>
        <!-- 'meta charset' détermine la façon dont le texte est transmis et stocké -->
    <meta charset="UTF-8">
        <!-- 'http-equiv' permet de modifier le comportement des serveurs ou des agents utilisateur par une valeur définie avec l'attribut 'content' -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 'link rel(relation) icon' utilisé pour intégrer une icône pour l'onglet de la page -->
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
        <!-- 'link rel(relation) stylesheet' permet d'ajouter une feuille de style CSS à son fichier HTML -->
    <link rel="stylesheet" href="CSS/style.css">
        <!-- La balise 'title' utilisée pour nommer son site, le nom y est figuré dans l'onglet de la page, utilisé pour le référencement sur les moteurs de recherche -->
    <title>The District</title>
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <?php
        require "header.php";
        ?>
    </header>
        <!-- Sousentête -->
    <div id="sous-top"></div>

    <?php 
        // On appelle la fonction présente dans le fichier DAO.php
    affich_plat();
            // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
        foreach($executerqt as $row): ?>
        
        <section>
        <h1 id="recuptitreplat"><?= $row["libelle"]?></h1>
        <div id="recupcommandeimage" class="image_plat_<?= $row["id"]?>"></div>
        <p><?= $row["description"]?></p>
        <h1><?= $row["prix"]?></h1>
        </section>
        <a href="commande.php?id=<?=  $row["id"] ?>" id="btncommand">Commander</a>

        <?php endforeach; ?>

            <!-- Pied de la page -->
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
            <!-- On intègre ses fichiers JAVASCRIPT -->
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>