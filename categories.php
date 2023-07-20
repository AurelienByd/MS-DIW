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
        <p class="color_titre">Catégories :</p>
        <div id="grille_catégories_catégories">
            <div class="cat_1"><a href="categorie1.php" title="pasta"><p class="imptitre">Pasta</p></a></div>
            <div class="cat_2"><a href="categorie2.php" title="pizza"><p class="imptitre">Pizza</p></a></div>
            <div class="cat_3"><a href="categorie3.php" title="salade"><p class="imptitre">Salade</p></a></div>
            <div class="cat_4"><a href="categorie4.php" title="sandwich"><p class="imptitre">Sandwich</p></a></div>
            <div class="cat_5"><a href="categorie5.php" title="veggie"><p class="imptitre">Veggie</p></a></div>
            <div class="cat_6"><a href="categorie6.php" title="wrap"><p class="imptitre">Wrap</p></a></div>
        </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>