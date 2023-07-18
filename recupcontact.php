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

fputs($fp, $nom)."<br>";
fputs($fp, $prenom)."<br>";
fputs($fp, $email)."<br>";
fputs($fp, $phone)."<br>";
fputs($fp, $demande)."<br>";

?>