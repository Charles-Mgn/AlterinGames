<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Altrules.php';

// Liste des règles alternatives
$sql = "SELECT * FROM altrules";

// Préparation de la requête
$requete = $pdo->prepare($sql);

// Tableau qui contiendra la liste
$liste = array();

// Si la requête renvoie quelque chose
if ($requete->execute()) {

    // Parcours des résultats
    while ($donnees = $requete->fetch()) {

        $altrules = new Altrules(
            $donnees['ID_ALTRULES'],
            $donnees['NAME_ALTRULES'],
            $donnees['DESC_ALTRULES'],
            $donnees['AUTHOR_ALTRULES'],
            $donnees['VOTES_NO_ALTRULES'],
            $donnees['VOTES_YES_ALTRULES'],
            $donnees['RANK_ALTRULES']
        );

        $liste[] = $donnees;
    }
}
echo json_encode($liste);
exit();



