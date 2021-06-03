<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';

session_start();

if(isset($_POST['login'])){

        $sql = "SELECT * from users WHERE LOGIN_USERS = ? AND PASSWORD_USERS = ?";

        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST["login"]);
        $requete->bindValue(2, $_POST["password"]);

        $requete->execute();

        if (!empty($requete->fetchAll())){
            $_SESSION['login'] = $_POST["login"];
            header('location: ../../profile.php');
        } else {
            echo "error";
        }

}else{
    // Format passé non conforme
    echo -1;
}
