<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Commandez un plat parmis une large sélection.">
    <link rel="icon" href="/ASSETS/images_the_district/logo (1).ico">
    <link rel="stylesheet" href="CSS/style.css">
    <title>The District</title>
</head>
<body>
    <header>
        <?php
        require "header.php";
        ?>
    </header>
        <div id="sous-top_accueil"><video src="/ASSETS/images_the_district/vegetables_-_14129 (360p).mp4" class="video" autoplay loop muted></video>
                <form action="" method="get" id="search">
                <input type="text" placeholder="Recherche..." class="search">
                <input type="button" value="envoyer" class="boutton">
                </form>
        </div>
        <p id="p-accueil">Catégories :</p>
        <div id="grille_catégories" class="parallax">
            <div class="cat_1" id="cat_1"><a href="categorie1.php" title="pasta"><p class="imptitre">Pasta</p></a></div>
            <div class="cat_2" id="cat_2"><a href="categorie2.php" title="pizza"><p class="imptitre">Pizza</p></a></div>
            <div class="cat_3" id="cat_3"><a href="categorie3.php" title="salade"><p class="imptitre">Salade</p></a></div>
            <div class="cat_4" id="cat_4"><a href="categorie4.php" title="sandwich"><p class="imptitre">Sandwich</p></a></div>
            <div class="cat_5" id="cat_5"><a href="categorie5.php" title="veggie"><p class="imptitre">Veggie</p></a></div>
            <div class="cat_6" id="cat_6"><a href="categorie6.php" title="wrap"><p class="imptitre">Wrap</p></a></div>
        </div>
        <p>Plats :</p>
        <div id="grille_plats" class="parallax">
            <div class="plat_1"><a href="plat8.php" title="grilled cheese"><img src="/ASSETS/images_the_district/Solid_white.svg_transparent.png" width="200" height="100"></a></div>
            <div class="plat_2"><a href="plat4.php" title="pizza au saumon"><img src="/ASSETS/images_the_district/Solid_white.svg_transparent.png" width="200" height="100"></a></div>
            <div class="plat_3"><a href="plat7.php" title="salade"><img src="/ASSETS/images_the_district/Solid_white.svg_transparent.png" width="200" height="100"></a></div>
        </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
</body>
<script src="JAVASCRIPT/script.js"></script>
</html>