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
        <p class="color_titre">Catégorie 2 :</p>
            <div class="cat_2_cat_2"></div>
        <p class="color_titre">Plats :</p>
            <div id="grille_plats_cat">
                <div class="cat_2_plat_1"><a href="plat3.php" title="Pizza margherita"><p class="imptitre">Pizza margherita</p></a></div>
                <div class="cat_2_plat_2"><a href="plat4.php" title="Pizza au saumon"><p class="imptitre">Pizza au saumon</p></a></div>
                <div class="cat_2_plat_3"><a href="plat5.php" title="Pizza aux épinards et à l'ail"><p class="imptitre">Pizza aux épinards et à l'ail</p></a></div>
            </div>
            <div id="tourner">
                <a href="categorie1.php" class="boutontourner">Précédent</a>
                <a href="categorie3.php" class="boutontourner">Suivant</a>
            </div>
            <footer>
                <?php
                require "footer.php";
                ?>
            </footer>
            <script src="JAVASCRIPT/script.js"></script>
</body>
</html>