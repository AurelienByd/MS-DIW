<?php

require 'connexion.php';

require 'DAO.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Commandez un plat parmis une large sélection.">
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
    <link rel="stylesheet" href="CSS/style.css">
    <title>The District</title>
</head>
<body class="parallax">
    <header>
        <?php
        require "header.php";
        ?>
    </header>
        <div id="sous-top_accueil"><video src="/ASSETS/images_the_district/vegetables_-_14129(360p).mp4" class="video" autoplay loop muted></video>
                <div id="search">
                <input type="search" placeholder="Recherche..." id="barre_search" name="search">
                <button type="button" id="boutton">Chercher</button>
                </div>
        </div>
        <p id="p-accueil" class="color_titre_accueil">Catégories :</p>
        <div id="grille_catégories">

        <?php get_categories();
        foreach($executerqt as $row): ?>
        
            <div class="cat_<?=$row["id"]?>" id="cat_<?=$row["id"]?>"><a href="categorie.php?id=<?=  $row["id"] ?>" title="<?= $row["libelle"] ?>"><p class="imptitre"><?= $row["libelle"] ?></p></a></div>

        <?php endforeach; ?>

        </div>
        <p class="color_titre_accueil">Plats :</p>
        <div id="grille_plats">

        <?php get_plats_pop();
        foreach($executerqt as $row): ?>

            <div class="plat_<?=$row["id"]?>"><a href="plat.php?id=<?=  $row["id"] ?>" title="<?= $row["plat"] ?>"><p class="invtext">clique ici</p></a></div>

        <?php endforeach; ?>

        </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
        <script src="JAVASCRIPT/searchbar.js"></script>
</body>
</html>