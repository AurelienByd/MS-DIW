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
        <div id="sous-top"></div>
        <p>Tout les plats :</p>
        <div id="grille_all_plats">
            <div class="all_plat1"><a href="plat1.php" title="Spaghettis et légumes"><p class="imptitre">Spaghettis et légumes</p></a></div>
            <div class="all_plat2"><a href="plat2.php" title="Tagliatelles avec saumon"><p class="imptitre">Tagliatelles avec saumon</p></a></div>
            <div class="all_plat3"><a href="plat3.php" title="Pizza margherita"><p class="imptitre">Pizza margherita</p></a></div>
            <div class="all_plat4"><a href="plat4.php" title="Pizza au saumon"><p class="imptitre">Pizza au saumon</p></a></div>
            <div class="all_plat5"><a href="plat5.php" title="Pizza aux épinards et à l'ail"><p class="imptitre">Pizza aux épinards et à l'ail</p></a></div>
            <div class="all_plat6"><a href="plat6.php" title="Salade César"><p class="imptitre">Salade césar</p></a></div>
            <div class="all_plat7"><a href="plat7.php" title="Salade"><p class="imptitre">Salade</p></a></div>
            <div class="all_plat8"><a href="plat8.php" title="Grilled cheese"><p class="imptitre">Grilled cheese</p></a></div>
            <div class="all_plat9"><a href="plat9.php" title="Quinoa aux potimarrons"><p class="imptitre">Quinoa aux potimarrons</p></a></div>
            <div class="all_plat10"><a href="plat10.php" title="Wrap"><p class="imptitre">Wrap</p></a></div>
        </div>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
        <script src="JAVASCRIPT/script.js"></script>
</body>
</html>