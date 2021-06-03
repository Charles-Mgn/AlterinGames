<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Users.php';

// Liste des règles alternatives
$sql = "SELECT * FROM users";

// Préparation de la requête
$requete = $pdo->prepare($sql);

// Tableau qui contiendra la liste
$liste = array();

// Si la requête renvoie quelque chose
if ($requete->execute()) {

    // Parcours des résultats
    while ($donnees = $requete->fetch()) {

        $users = new Users(
            $donnees['ID_USERS'],
            $donnees['LOGIN_USERS'],
            $donnees['PASSWORD_USERS'],
            $donnees['ROLE_USERS'],
            $donnees['POINTS_USERS'],
            $donnees['PICTURE_USERS'],
            $donnees['BANNER_USERS'],
            $donnees['BIO_USERS'],
            $donnees['BADGES_USERS'],
            $donnees['FIRST_NAME_USERS'],
            $donnees['LAST_NAME_USERS'],
            $donnees['EMAIL_USERS'],
            $donnees['PHONE_USERS'],
            $donnees['ADDRESS_USERS'],
            $donnees['CITY_USERS'],
            $donnees['POSTAL_USERS']
        );

        $liste[] = $donnees;
    }
}
echo json_encode($liste);
exit();

