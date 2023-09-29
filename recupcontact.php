<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $time = time();
    $format = "Y-m-d-H-i-s";
    $date = date($format, $time);

    $name = $_POST["name"];
    $firstName = $_POST["firstname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $demande = $_POST["demande"];

    $stock = fopen("$date.txt", "w");

    fputs($stock, "Nom : ".$name."\n");
    fputs($stock, "Prénom : ".$firstName."\n" );
    fputs($stock, "Email : ".$email."\n");
    fputs($stock, "Téléphone : ".$phone."\n");
    fputs($stock, "Demande : ".$demande."\n");

    fclose($stock);

    header("Location: index.php");

}

?>