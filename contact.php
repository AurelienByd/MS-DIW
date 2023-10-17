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
        <!-- Sousentête -->
    <div id="sous-top"></div>
    
    <!-- <form id="form-contact" action="recupcontact.php" method="post" class="d-flex justify-content-center flex-wrap p-5 m-5">
        <div class="col-lg-5 col-12 mb-5 me-lg-5">
            <label for="nom" class="form-label fw-bold">Nom</label><input type="text" name="nom" id="name" class="form-control is-invalid border border-3 border-black" required>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-5 col-12 mb-5 ms-lg-5">
            <label for="prénom" class="form-label fw-bold">Prénom</label><input type="text" name="prénom" class="form-control border border-3 border-black">
        </div>
        <div class="col-lg-5 col-12 mb-5 me-lg-5">
            <label for="email" class="form-label fw-bold">Email</label><input type="email" name="email" class="form-control border border-3 border-black">
        </div>
        <div class="col-lg-5 col-12 mb-5 ms-lg-5">
            <label for="téléphone" class="form-label fw-bold">Téléphone</label><input type="number" name="téléphone" id="phone" class="form-control is-invalid border border-3 border-black" required>
            <div class="invalid-feedback">
                Ce champ est obligatoire
            </div>
        </div>
        <div class="col-lg-11 col-12 mb-5">
            <label for="demande" class="form-label fw-bold">Votre demande</label><textarea name="demande" rows="3" class="form-control border border-3 border-black"></textarea>
        </div>
        <div class="col-lg-10 d-flex justify-content-end">
            <input type="submit" value="Envoyer" class="btn btn-info text-white">
        </div>
    </form> -->

    <p class="color_titre">Contact :</p>
    
    <form action="recupcontact.php" method="post" id="form-contact">
        <fieldset class="fieldset_form_contact">
        <div class="div1_form_contact">
            <div class="div_form_contact"><label class="label_form_contact" for="name">Nom</label><sup class="p_form_contact">*</sup><input type="text" name="name" id="name" class="input_form_contact"><span id="error1" class="span_form_contact"></span></div>
            <div class="div_form_contact"><label class="label_form_contact" for="firstname">Prénom</label><input type="text" name="firstname" id="firstname" class="input_form_contact"></div>
        </div>
        <div class="div2_form_contact">
            <div class="div_form_contact"><label class="label_form_contact" for="email">Email</label><input type="email" name="email" id="email" class="input_form_contact"></div>
            <div class="div_form_contact"><label class="label_form_contact" for="phone">Téléphone</label><sup class="p_form_contact">*</sup><input type="text" name="phone" id="phone" class="input_form_contact"><span id="error2" class="span_form_contact"></span></div>
        </div>
        <div class="div3_form_contact">
            <div class="div_form_contact"><label class="label_form_contact" for="demande">Votre demande</label><textarea type="text" name="demande" id="demande" rows="5"class="textarea_form_contact"></textarea></div>
        </div>
        <div class="div4_form_contact">
            <button type="submit" class="button_submit_form_contact">Envoyer</button>
        </div>
        </fieldset>
    </form>

        <!-- Pied de la page -->
    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- On intègre ses fichiers JAVASCRIPT -->
    <script src="JAVASCRIPT/script.js"></script>
    <script src="JAVASCRIPT/contact.js"></script>
</body>
</html>