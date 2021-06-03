<?php

header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Game.php';
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
    $sql = "SELECT * FROM game WHERE ID_GAME = ?";

    // Préparation de la requête
    $requete = $pdo->prepare($sql);

    // Paramètre : id du jeu
    $requete->bindValue(1, $_POST["id"]);
    $game = null;

    // Si la requête renvoie quelque chose
    if ($requete->execute()) {
        // un seul résultat
        if($donnees = $requete->fetch()) {

            $game = new Game(
                $donnees['ID_GAME'],
                $donnees['NAME_GAME'],
                $donnees['CATEGORY_GAME']
            );

        }
    }
    echo json_encode($donnees);
}else{
    // Si pas de id, on retourne -1
    echo -1;
}