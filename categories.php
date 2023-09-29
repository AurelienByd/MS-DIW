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
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
    <link rel="stylesheet" href="CSS/style.css">
    <title>The District</title>
</head>
<body>
    <header>
        <?php
        require "header.php";
        ?>
    </header>
        <div id="sous-top">
        </div>
        <p class="color_titre">Catégories :</p>
        <div id="grille_catégories_catégories">

        <?php get_categories();
        foreach($executerqt as $row): ?>
        
            <div class="cat_<?=$row["id"]?>"><a href="categorie.php?id=<?=  $row["id"] ?>" title="<?= $row["libelle"] ?>"><p class="imptitre"><?= $row["libelle"] ?></p></a></div>

        <?php endforeach; ?>

        </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>