<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=aurelien', 'aurelien', 'afpa1234');
    // $db = new PDO('mysql:host=localhost;dbname=the_district', 'admin', 'Afpa1234');
    // echo "connecté avec succès";
    } catch (PDOException) {
        echo "erreur de connexion";
    }

?>