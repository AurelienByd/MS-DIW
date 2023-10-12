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

        <?php affich_titre_cat();
        foreach($executerqt as $row): ?>

        <p class="color_titre"><?= $row["libelle"] ?>'s :</p>

        <?php endforeach; ?>

        <?php affich_titre_cat();
        foreach($executerqt as $row): ?>

        <div class="cat_<?= $row["id"] ?>_cat_<?= $row["id"] ?>"></div>

        <?php endforeach; ?>

        <p class="color_titre">Plats :</p>
            <div id="grille_plats_cat">

            <?php affich_plats_cat();
            foreach($executerqt as $row): ?>

            <div class="cat_<?=$row["id_categorie"]?>_plat_<?=$row["id_plat"]?>"><a href="plat.php?id=<?=  $row["id_plat"] ?>" title="<?=$row["libelle_plat"]?>"><p class="invtext">clique ici</p><p class="imptitre2"><?=$row["libelle_plat"]?></p></a></div>

            <?php endforeach; ?>

            </div>
            <div id="tourner">

                <!-- <a href="categorie.php?id=" class="boutontourner">Précédent</a>
                <a href="categorie.php?id=" class="boutontourner">Suivant</a> -->
                
            </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>