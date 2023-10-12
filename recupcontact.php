<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    session_start();

    $_SESSION["auth"] = true;

    $time = time();
    $format = "Y-m-d-H-i-s";
    $date = date($format, $time);

    // $name = $_POST["name"];
    // $firstName = $_POST["firstname"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $demande = $_POST["demande"];

    $_SESSION['name']=$_POST["name"];
    $_SESSION['firstName']=$_POST["firstname"];
    $_SESSION['email']=$_POST["email"];
    $_SESSION['phone']=$_POST["phone"];
    $_SESSION['demande']=$_POST["demande"];

    $stock = fopen("$date.txt", "w");

    fputs($stock, "Nom : ".$_SESSION['name']."\n");
    fputs($stock, "Prénom : ".$_SESSION['firstName']."\n" );
    fputs($stock, "Email : ".$_SESSION['email']."\n");
    fputs($stock, "Téléphone : ".$_SESSION['phone']."\n");
    fputs($stock, "Demande : ".$_SESSION['demande']."\n");

    fclose($stock);

    header("Location: destroy.php");

}

?>