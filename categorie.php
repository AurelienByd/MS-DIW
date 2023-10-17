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
        <div id="sous-top">
        </div>

        <?php 
            // On appelle la fonction présente dans le fichier DAO.php
        affich_titre_cat();
            // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
        foreach($executerqt as $row): ?>

        <p class="color_titre"><?= $row["libelle"] ?>'s :</p>

        <?php endforeach; ?>

        <?php 
            // On appelle la fonction présente dans le fichier DAO.php
        affich_titre_cat();
            // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
        foreach($executerqt as $row): ?>

        <div class="cat_<?= $row["id"] ?>_cat_<?= $row["id"] ?>"></div>

        <?php endforeach; ?>

        <p class="color_titre">Plats :</p>
            <div id="grille_plats_cat">

            <?php 
                // On appelle la fonction présente dans le fichier DAO.php
            affich_plats_cat();
                // On parcourt chaque ligne du tableau du résultat de la requête SQL executée
            foreach($executerqt as $row): ?>

            <div class="cat_<?=$row["id_categorie"]?>_plat_<?=$row["id_plat"]?>"><a href="plat.php?id=<?=  $row["id_plat"] ?>" title="<?=$row["libelle_plat"]?>"><p class="invtext">clique ici</p><p class="imptitre2"><?=$row["libelle_plat"]?></p></a></div>

            <?php endforeach; ?>

            </div>
            <div id="tourner">

                <!-- <a href="categorie.php?id=" class="boutontourner">Précédent</a>
                <a href="categorie.php?id=" class="boutontourner">Suivant</a> -->
                
            </div>
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