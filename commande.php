<?php

    // On met en 'require' le fichier PHP qui permet de se connecter à la base de données car il est indispensable à la bonne présentation du site
require 'connexion.php';

    // Le fichier DAO.php permet de stocker les fonctions pour utiliser les requêtes SQL sur les fichiers PHP
require 'DAO.php';

?>
<!DOCTYPE html>
    <!-- 'Lang' permet de définir la langue utilisée pour l'élément -->
<html lang="fr">
<head>
        <!-- 'meta charset' détermine la façon dont le texte est transmis et stocké -->
    <meta charset="UTF-8">
        <!-- 'http-equiv' permet de modifier le comportement des serveurs ou des agents utilisateur par une valeur définie avec l'attribut 'content' -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 'link rel(relation) icon' utilisé pour intégrer une icône pour l'onglet de la page -->
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
        <!-- 'link rel(relation) stylesheet' permet d'ajouter une feuille de style CSS à son fichier HTML -->
    <link rel="stylesheet" href="CSS/style.css">
        <!-- La balise 'title' utilisée pour nommer son site, le nom y est figuré dans l'onglet de la page, utilisé pour le référencement sur les moteurs de recherche -->
    <title>The District</title>
</head>
<body>
    <!-- En-tête de la page -->
    <header>
        <?php
        require "header.php";
        ?>
    </header>
    
    <!-- <form action="" method="post" class="d-flex justify-content-center flex-wrap p-5 m-5 bg-warning p-2 text-dark bg-opacity-25">
        <div class="col-lg-11 col-12 ms-lg-5 mb-5 me-lg-5">
            <label for="nometprénom" class="form-label fw-bold text-info">Nom et prénom</label><input type="text" name="nometprénom" class="form-control is-invalid border border-3 border-black" required>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-5 col-12 mb-5 me-lg-5">
            <label for="email" class="form-label fw-bold text-info">Email</label><input type="email" name="email" class="form-control is-invalid border border-3 border-black" required>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-5 col-12 mb-5 ms-lg-5">
            <label for="téléphone" class="form-label fw-bold text-info">Téléphone</label><input type="number" name="téléphone" class="form-control is-invalid border border-3 border-black" required>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-11 col-12 mb-5">
            <label for="adresse" class="form-label fw-bold text-info">Votre adresse</label><textarea name="adresse" rows="3" class="form-control is-invalid border border-3 border-black" required></textarea>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-10 d-flex justify-content-end">
            <input type="submit" value="Envoyer" class="btn btn-info text-white">
        </div>
    </form> -->

    <p class="color_titre">Commande :</p>
    
    <form action="commande_script.php" method="post" id="form-commande">

    <?php 
        // On appelle la fonction présente dans le fichier DAO.php
    affich_plat();
        foreach($executerqt as $row): ?>
        
        <section id="sectionCommandePlat">

        <div class="divsectionCommandePlat">
            <div id="divsectionCommandePlatImg">
                <img src="/ASSETS/images_the_district/food/<?= $row["image"] ?>" width="100" height="100">
            </div>
            <div id="divsectionCommandePlatInfo">
                <div>
                    <h5 id="txtCommandeTitre"><?= $row["libelle"] ?></h5>
                    <p id="txtCommandePlat"><?= $row["description"] ?></p>
                </div>
                <div id="divsectionCommandePlatInfos">
                    <p id="txtCommandePlat2">Quantité</p>
                    <input type="number" name="nbrQuantite" class="btnNbrQuantite" value="1" min="1" max="9">
                </div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?= $row["id"] ?>">
        <input type="hidden" name="prixPlat" value="<?= $row["prix"] ?>">
        <input type="hidden" name="nomPlat" value="<?= $row["libelle"] ?>">

        </section>

        <?php endforeach; ?>
        
        <fieldset class="fieldset_form_commande">
        <div class="div1_form_commande">
            <div class="div_form_commande"><label class="label_form_commande" for="nameandfirstname">Nom et prénom</label><sup class="p_form_commande">*</sup><input type="text" name="nameandfirstname" id="nameandfirstname" class="input_nameandfirstname_form_commande"><span id="error1" class="span_form_commande"></span></div>
        </div>
        <div class="div2_form_commande">
            <div class="div_form_commande"><label class="label_form_commande" for="email">Email</label><sup class="p_form_commande">*</sup><input type="text" name="email" id="email" class="input_form_commande"><span id="error2" class="span_form_commande"></span></div>
            <div class="div_form_commande"><label class="label_form_commande" for="phone">Téléphone</label><sup class="p_form_commande">*</sup><input type="text" name="phone" id="phone" class="input_form_commande"><span id="error3" class="span_form_commande"></span></div>
        </div>
        <div class="div3_form_commande">
            <div class="div_form_commande"><label class="label_form_commande" for="adresse">Votre adresse</label><sup class="p_form_commande">*</sup><textarea type="text" name="adresse" id="adresse" rows="5"class="textarea_form_commande"></textarea><span id="error4" class="span_form_commande"></span></div>
        </div>
        <div class="div4_form_commande">
            <button type="submit" class="button_submit_form_commande">Envoyer</button>
        </div>
        </fieldset>
    </form>

    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- On intègre ses fichiers JAVASCRIPT -->
    <script src="JAVASCRIPT/script.js"></script>
    <script src="JAVASCRIPT/commande.js"></script>
</body>
</html>