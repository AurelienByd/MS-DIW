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
        <p>Catégorie 5 :</p>
            <div class="cat_5_cat_5"></div>
        <p>Plats :</p>
            <div id="grille_plats_cat">
                <div class="cat_5_plat_1"><a href="plat9.php" title="Quinoa aux potimarrons"><p class="imptitre">Quinoa aux potimarrons</p></a></div>
            </div>
            <div id="tourner">
                <a href="categorie4.php" class="boutontourner">Précédent</a>
                <a href="categorie6.php" class="boutontourner">Suivant</a>
            </div>
            <footer>
                <?php
                require "footer.php";
                ?>
            </footer>
            <script src="JAVASCRIPT/script.js"></script>
</body>
</html>