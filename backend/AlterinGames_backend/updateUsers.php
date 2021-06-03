<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';
require_once 'classes/class.Users.php';

session_start();

if (isset($_POST['login'])) {


    $login = $_POST['login'];

    $sql = "UPDATE users set LOGIN_USERS = ?, PASSWORD_USERS = ?, BIO_USERS = ?, EMAIL_USERS = ? WHERE LOGIN_USERS='$login'";

    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST["login"]);
    $requete->bindValue(2, $_POST["password"]);
    $requete->bindValue(3, $_POST["bio"]);
    $requete->bindValue(4, $_POST["mail"]);

    echo "<pre>".print_r($_POST["login"],$_POST["password"],$_POST["bio"],$_POST["mail"])."</pre>";

    $requete->execute();
    echo "updated";
} else {
    // Format passé non conforme
    echo -1;
}
