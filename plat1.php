<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div id="sous-top"></div>
        <section>
        <h1 id="recuptitreplat">Spaghettis et légumes</h1>
        <div id="recupcommandeimage" class="image_plat_1"></div>
        <p>Spaghettis accompagnés de légumes.</p>
        <h1>5€</h1>
        </section>
        <button id="btncommand" type="submit">Commander</button>
        <footer>
            <?php
            require "footer.php";
            ?>
        </footer>
</body>
<script src="JAVASCRIPT/script.js"></script>
</html>