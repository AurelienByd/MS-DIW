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
        <p>Catégorie 3 :</p>
            <div class="cat_3_cat_3"></div>
        <p>Plats :</p>
            <div id="grille_plats_cat">
                <div class="cat_3_plat_1"><a href="plat6.php" title="Salade César"><p class="imptitre">Salade césar</p></a></div>
                <div class="cat_3_plat_2"><a href="plat7.php" title="Salade"><p class="imptitre">Salade</p></a></div>
            </div>
            <div id="tourner">
                <a href="categorie2.php" class="boutontourner">Précédent</a>
                <a href="categorie4.php" class="boutontourner">Suivant</a>
            </div>
            <footer>
                <?php
                require "footer.php";
                ?>
            </footer>
            <script src="JAVASCRIPT/script.js"></script>
</body>
</html>