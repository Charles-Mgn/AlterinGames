<?php

header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Users.php';
// On test les 2 méthodes afin
// de pouvoir faire la requête
// en POST et en GET


session_start();
$login=$_POST['login'];

if(isset($_POST["login"])){$login= $_POST["login"];}
if(isset($_GET["login"])){$login = $_GET["login"];}

$_POST["login"] = $login;
$_GET["login"] = $login;
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

// Si le paramètre login existe
if(isset($_POST["login"])){
    // Potion sélectionnée
    $sql = "SELECT * FROM users WHERE LOGIN_USERS = ?";

    // Préparation de la requête
    $requete = $pdo->prepare($sql);

    // Paramètre : login du User
    $requete->bindValue(1, $_POST["login"]);
    $users = null;

    // Si la requête renvoie quelque chose
    if ($requete->execute()) {
        // un seul résultat
        if($donnees = $requete->fetch()) {

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
        }
    }
    echo json_encode($donnees);
}else{
    // Si pas de login, on retourne -1
    echo -1;
}