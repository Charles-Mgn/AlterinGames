<?php

header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Users.php';

session_start();
$login=$_SESSION['login'];

if(isset($_POST["login"])){$login= $_POST["login"];}
if(isset($_GET["login"])){$login = $_GET["login"];}

$_POST["login"] = $login;
$_GET["login"] = $login;

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";


// Si le paramètre login existe
if(isset($_POST["login"])){

    $query = 'SELECT BIO_USERS FROM users WHERE LOGIN_USERS = ?';

    $requete = $pdo->prepare($query);
    $requete->bindValue(1, $_POST["login"]);
    $liste = array();

    if($requete->execute()){
        echo $requete->fetch();
    }
    else { echo "Erreur de requÃªte"; }}