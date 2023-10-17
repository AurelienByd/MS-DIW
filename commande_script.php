<?php

    // On met en 'require' le fichier PHP qui permet de se connecter à la base de données car il est indispensable à la bonne présentation du site
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    session_start();

    $_SESSION["auth"] = true;

    $quantite = $_POST['nbrQuantite'];
    $nom = $_POST['nameandfirstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adresse = $_POST['adresse'];
    $idPlat = $_POST['id'];
    $prixPlat = $_POST['prixPlat'];
    $nomPlat = $_POST['nomPlat'];

    $totalPrixPlat = $quantite*$prixPlat;

    $time = time();
    $format = "Y-m-d H-i-s";
    $date = date($format, $time);

    try {

        if (empty($nom) || empty($email) || empty($phone) || empty($adresse)) {
            echo 'Veuillez remplir tout les champs';
        } else {
            if (preg_match('/^(?=.*?[a-z- ])(?=.*?[A-Z- ])$/', $nom) == false && preg_match('/^(?=.*?[a-zA-Z0-9-.\_])@[a-zA-Z0-9]+.[a-zA-Z]{2,3}$/', $email) == false && preg_match('/^0[1-9]([-. ]?[0-9]{2}){4}$/', $phone) == false && preg_match('/^[a-zA-Z0-9- ]$/', $adresse) == false) {
            echo 'Veuillez respecter le format des champs demandés';
            } else {

                $_SESSION["quantite"] = $quantite;
                $_SESSION["nom"] = $nom;
                $_SESSION["email"] = $email;
                $_SESSION["phone"] = $phone;
                $_SESSION["adresse"] = $adresse;
                $_SESSION["idPlat"] = $idPlat;
                $_SESSION["totalPrix"] = $totalPrixPlat;
                $_SESSION["nomPlat"] = $nomPlat;

                $_SESSION["date"] = $date;

                try {

                    $rqtprep = "INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) VALUES (:idPlat, :quantite, :totalPrix, :datee, 'En préparation', :nom, :phone, :email, :adresse)";

                    $envoie = $db->prepare($rqtprep);
                    $envoie->bindParam(":idPlat", $_SESSION["idPlat"]);
                    $envoie->bindParam(":quantite", $_SESSION["quantite"]);
                    $envoie->bindParam(":totalPrix", $_SESSION["totalPrix"]);
                    $envoie->bindParam(":datee", $_SESSION["date"]);
                    $envoie->bindParam(":nom", $_SESSION["nom"]);
                    $envoie->bindParam(":phone", $_SESSION["phone"]);
                    $envoie->bindParam(":email", $_SESSION["email"]);
                    $envoie->bindParam(":adresse", $_SESSION["adresse"]);
                    $envoie->execute();

                    // envoie du mail

                    header("Location: envoie_mail_script.php");

                    // require 'destroy.php';

                } catch (PDOException) {
                    echo "Erreur sur le script";
                }
            }
        }
    } catch (PDOException) {
    echo "Erreur du formulaire";
    }
}

$db = null;

?>