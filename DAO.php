<?php // Le fichier DAO.php utilisé pour stocker toutes les requetes SQL

    // On met en 'require' le fichier PHP qui permet de se connecter à la base de données car il est indispensable à la bonne présentation du site
require 'connexion.php';

// Ecrire des requêtes d'interrogation de la base de données

// // Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )
// SELECT
// commande.date_commande,
// commande.nom_client,
// commande.telephone_client,
// commande.email_client,
// commande.adresse_client,
// plat.libelle AS "nom_plat",
// plat.prix
// FROM `commande`
// INNER JOIN `plat` ON commande.id_plat = plat.id

// // Afficher la liste des plats en spécifiant la catégorie
// SELECT
// plat.libelle AS "plat",
// categorie.libelle AS "categorie"
// FROM `plat`
// INNER JOIN `categorie` ON plat.id_categorie = categorie.id

// Afficher les catégories et le nombre de plats actifs dans chaque catégorie
// SELECT 
// categorie.libelle AS 'libelle_categorie', 
// categorie.image AS 'image_categorie', 
// COUNT (plat.id_categorie) AS 'nombre_plats_actifs' 
// FROM categorie 
// INNER JOIN plat ON categorie.id = plat.id_categorie 
// WHERE plat.active = 'Yes' 
// GROUP BY plat.id_categorie";

// Liste des plats les plus vendus par ordre décroissant
// SELECT
// plat.libelle AS "plat",
// SUM(commande.quantite) AS `plats les plus vendus`
// FROM `plat`
// INNER JOIN `commande` ON plat.id = commande.id_plat
// WHERE commande.etat != "Annulée"
// GROUP BY commande.id_plat
// ORDER BY `plats les plus vendus` DESC

// // Le plat le plus rémunérateur
// SELECT
// plat.libelle,
// SUM(commande.total) AS totalmax
// FROM `plat`
// INNER JOIN `commande` ON plat.id = commande.id_plat
// WHERE commande.etat != "Annulée"
// GROUP BY commande.id_plat
// ORDER BY totalmax DESC
// LIMIT 1

// // Liste des clients et le chiffre d'affaire généré par client (par ordre décroissant)
// SELECT
// nom_client,
// total AS "chiffre d'affaire généré"
// FROM `commande`
// WHERE etat != "Annulée"
// ORDER BY total DESC

// // Ecrire des requêtes de modification de la base de données

// // Ecrivez une requête permettant de supprimer les plats non actif de la base de données
// DELETE
// FROM `plat`
// WHERE plat.active = "No"

// // Ecrivez une requête permettant de supprimer les commandes avec le statut livré
// DELETE
// FROM `commande`
// WHERE commande.etat = "Livrée"

// // Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie
// INSERT INTO `categorie` (`id`, `libelle`, `image`, `active`)
// VALUES (15, "Tarte", 'tarte_cat.jpg', "No")

// INSERT INTO `plat` (`id`, `libelle`, `description`, `prix`, `image`, `id_categorie`, `active`)
// VALUES (18, "Tarte aux pommes", "Tarte à base de morceaux de pommes", 10.00, 'tarte_aux_pommes.jpg', 15, "No")

// // Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'
// UPDATE `plat`
// SET plat.prix = plat.prix*1.10
// WHERE plat.id_categorie = 4










// Pour afficher les 6 catégories de la page d'accueil

    // On crée une fonction
function get_categories() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT DISTINCT categorie.libelle, categorie.image, categorie.id FROM `categorie` INNER JOIN `plat` ON categorie.id=plat.id_categorie WHERE categorie.active='Yes' LIMIT 6";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête
$rqt->execute();
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

// Pour afficher les 3 plats les plus vendus sur la page d'accueil

    // On crée une fonction
function get_plats_pop() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT plat.image, plat.id, plat.libelle AS 'plat', SUM(commande.quantite) AS `plats les plus vendus` FROM `plat` INNER JOIN `commande` ON plat.id = commande.id_plat INNER JOIN `categorie` ON plat.id_categorie=categorie.id WHERE plat.active='Yes' AND categorie.active='Yes' GROUP BY commande.id_plat ORDER BY `plats les plus vendus` DESC LIMIT 3";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête
$rqt->execute();
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

// Pour afficher les 6 plats de la page plats

    // On crée une fonction
function get_plats() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT DISTINCT plat.id, plat.libelle FROM `plat` INNER JOIN `categorie` ON plat.id_categorie=categorie.id WHERE plat.active='Yes' AND categorie.active='Yes' ORDER BY RAND() LIMIT 6";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête
$rqt->execute();
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

// Afficher les plats dans chaque page catégorie

    // On crée une fonction
function affich_plats_cat() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT categorie.id AS 'id_categorie', categorie.libelle AS 'libelle_categorie', plat.id AS 'id_plat', plat.libelle AS 'libelle_plat' FROM `plat` INNER JOIN `categorie` ON plat.id_categorie=categorie.id WHERE categorie.active='Yes' AND plat.active='Yes' AND plat.id_categorie=? AND plat.active='Yes'";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête et on envoie l'ID du plat dans l'URL avec la superglobale $_GET
$rqt->execute(array($_GET["id"]));
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

// Afficher le titre de la catégorie

    // On crée une fonction
function affich_titre_cat() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT categorie.id, categorie.libelle FROM `categorie`WHERE categorie.active='Yes' AND categorie.id=?";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête et on envoie l'ID de la catégorie dans l'URL avec la superglobale $_GET
$rqt->execute(array($_GET["id"]));
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

// Pour afficher les détails du plat, utilisé pour la page du plat et de la commande

    // On crée une fonction
function affich_plat() {

    // La fonction 'global' en PHP permet de rendre une variable PHP qui est déclarée en dehors d'une fonction 'function' utilisable dans cette fonction 'function'
global $db, $rqtprep, $rqt, $executerqt;

    // On commence à créer une variable pour y intégrer une requête SQL
$rqtprep = "SELECT * FROM `plat` WHERE plat.id=? AND plat.active='Yes'";
    // On prépare la requête, on accède à la base de données pour préparer la requête
$rqt = $db->prepare($rqtprep);
    // On exécute la requête et on envoie l'ID du plat dans l'URL avec la superglobale $_GET
$rqt->execute(array($_GET["id"]));
    // On récupère les lignes restantes du résultat de la requête
$executerqt = $rqt->fetchAll();

};

?>