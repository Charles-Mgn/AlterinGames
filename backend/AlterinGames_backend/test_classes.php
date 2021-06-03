<?php

    require_once 'classes/class.Users.php';
    require_once 'cnx.php';

    $query = "SELECT DESC_USERS FROM users WHERE ID_USERS = 1";

    $requete = $pdo->prepare($query);
    $liste = array();

    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            echo $donnees["DESC_USERS"]."<br/>";
            }

    } else { echo "Erreur de requête"; }