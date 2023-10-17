<?php

// On essaye 'try' la connexion à la base de données avec la classe (new) PDO et en cas d'échec, on attrape 'catch' les erreurs éventuelles avec la classe PDOException
try {
    // $db = new PDO('mysql:host=localhost;dbname=aurelien', 'aurelien', 'afpa1234');
    $db = new PDO('mysql:host=localhost;dbname=the_district', 'admin', 'Afpa1234');
    // echo "connecté avec succès";
    } catch (PDOException) {
        echo "erreur de connexion";
    }

?>