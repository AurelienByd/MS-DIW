<?php

require 'connexion.php';

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = true;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;                                   

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)

$mail->addAddress($_SESSION['email'], $_SESSION['nom']);

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

// //CC & BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);

// Sujet du mail
$mail->Subject = 'Commande The District';

// Corps du message
$mail->Body = "Bonjour, vous avez commandé ".$_SESSION["quantite"]." ".$_SESSION["nomPlat"]." pour un total de ".$_SESSION["totalPrix"]."€ le ".$_SESSION["date"]." au nom de ".$_SESSION["nom"]." à livrer à l'adresse : ".$_SESSION["adresse"].". Nous nous occupons de votre commande dés que possible.";

// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        // echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
    }

require 'destroy.php';

?>