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
    <div id="sous-top"></div>

    <?php affich_plat();
        foreach($executerqt as $row): ?>
        
        <section>
        <h1 id="recuptitreplat"><?= $row["libelle"]?></h1>
        <div id="recupcommandeimage" class="image_plat_<?= $row["id"]?>"></div>
        <p><?= $row["description"]?></p>
        <h1><?= $row["prix"]?></h1>
        </section>
        <a href="commande.php?id=<?=  $row["id"] ?>" id="btncommand">Commander</a>

        <?php endforeach; ?>

        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>