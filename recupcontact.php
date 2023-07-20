<?php

$oSecondes = time();
$format = "Y-m-d-H-i-s";
$date = date($format, $oSecondes);


$nom = $_REQUEST["nom"];
$prenom = $_REQUEST["prénom"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["téléphone"];
$demande = $_REQUEST["demande"];


$fp = fopen("$date.txt", "a");

fputs($fp, "Nom : ".$nom."\n");
fputs($fp, "Prénom : ".$prenom."\n");
fputs($fp, "Email : ".$email."\n");
fputs($fp, "Téléphone : ".$phone."\n");
fputs($fp, "Demande : ".$demande."\n");

?>