<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ASSETS/images_the_district/logo(1).ico">
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
        <p class="color_titre">Catégorie 1 :</p>
            <div class="cat_1_cat_1"></div>
        <p class="color_titre">Plats :</p>
            <div id="grille_plats_cat">
                <div class="cat_1_plat_1"><a href="plat1.php" title="Spaghettis et légumes"><p class="imptitre">Spaghettis et légumes</p></a></div>
                <div class="cat_1_plat_2"><a href="plat2.php" title="Tagliatelles avec saumon"><p class="imptitre">Tagliatelles avec saumon</p></a></div>
            </div>
            <div id="tourner">
                <a href="categorie6.php" class="boutontourner">Précédent</a>
                <a href="categorie2.php" class="boutontourner">Suivant</a>
            </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>