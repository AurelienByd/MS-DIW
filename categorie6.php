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
        <p class="color_titre">Catégorie 6 :</p>
            <div class="cat_6_cat_6"></div>
        <p class="color_titre">Plats :</p>
            <div id="grille_plats_cat">
                <div class="cat_6_plat_1"><a href="plat10.php" title="Wrap"><p class="imptitre">Wrap</p></a></div>
            </div>
            <div id="tourner">
                <a href="categorie5.php" class="boutontourner">Précédent</a>
                <a href="categorie1.php" class="boutontourner">Suivant</a>
            </div>
            <footer>
                <?php
                require "footer.php";
                ?>
            </footer>
            <script src="JAVASCRIPT/script.js"></script>
</body>
</html>