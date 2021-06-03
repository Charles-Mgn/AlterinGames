<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Game.php';

// Liste des règles alternatives
$sql = "SELECT * FROM game";

// Préparation de la requête
$requete = $pdo->prepare($sql);

// Tableau qui contiendra la liste
$liste = array();

// Si la requête renvoie quelque chose
if ($requete->execute()) {

    // Parcours des résultats
    while ($donnees = $requete->fetch()) {

        $game = new Game(
            $donnees['ID_GAME'],
            $donnees['NAME_GAME'],
            $donnees['CATEGORY_GAME']
        );

        $liste[] = $donnees;
    }
}
echo json_encode($liste);
exit();
