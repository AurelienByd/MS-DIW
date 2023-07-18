<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/ASSETS/images_the_district/logo(1).ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>The District</title>
</head>
<body class="bg-warning bg-opacity-25">
    <header>
        <?php
        require "header.php";
        ?>
    </header>
    
    <section id="commandesection" class="commandesection">
        <img src="" width="100" height="100" id="commandeimgplat" class="commandeimgplat">
        
        <p id="txttitreplat" class="txttitreplat">Nom du plat</p>
        <p id="txtdescription" class="txtdescription">Lorem Ipsum</p>
        
        <div class="divquantitenb">
        <p id="txtquantite" class="txtquantite">Quantité :</p>
        <input type="number" value="1" min="0" id="nbquantite" class="nbquantite">
        </div>
    </section>
    
    <form action="" method="post" class="d-flex justify-content-center flex-wrap p-5 m-5 bg-warning p-2 text-dark bg-opacity-25">
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
    </form>
    <footer>
        <?php
        require "footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JAVASCRIPT/script.js"></script>
</body>
</html>