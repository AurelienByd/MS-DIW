<?php

require 'connexion.php';

require 'DAO.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ASSETS/images_the_district/logo.ico">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
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

    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="JAVASCRIPT/script.js"></script>
</body>
</html>