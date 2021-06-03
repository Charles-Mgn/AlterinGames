<?php

header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Altrules.php';
// On test les 2 méthodes afin
// de pouvoir faire la requête
// en POST et en GET
$id=1;
if(isset($_POST["id"])){$id= $_POST["id"];}
if(isset($_GET["id"])){$id = $_GET["id"];}

$_POST["id"] = $id;
$_GET["id"] = $id;
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

// Si le paramètre id existe
if(isset($_POST["id"])){
    // Potion sélectionnée
    $sql = "SELECT * FROM altrules WHERE ID_ALTRULES = ?";

    // Préparation de la requête
    $requete = $pdo->prepare($sql);

    // Paramètre : id de la règle
    $requete->bindValue(1, $_POST["id"]);
    $altrule = null;

    // Si la requête renvoie quelque chose
    if ($requete->execute()) {
        // un seul résultat
        if($donnees = $requete->fetch()) {

            $altrule = new Altrules(
                $donnees['ID_ALTRULES'],
                $donnees['NAME_ALTRULES'],
                $donnees['DESC_ALTRULES'],
                $donnees['AUTHOR_ALTRULES'],
                $donnees['VOTES_NO_ALTRULES'],
                $donnees['VOTES_YES_ALTRULES'],
                $donnees['RANK_ALTRULES']
            );

        }
    }
    echo json_encode($donnees);
}else{
    // Si pas de id, on retourne -1
    echo -1;
}