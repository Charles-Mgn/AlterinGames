<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';

session_start();
if(isset($_POST['login'])){


    if (empty($login)) { echo "<script type='text/javascript'>alert('Un nom d\'utilisateur doit être choisi')</script>"; }
    if (empty($email)) { echo  "<script type='text/javascript'>alert('Une adresse mail doit être choisie')</script>"; }
    if (empty($password_1)) { echo "<script type='text/javascript'>alert('Un mot de passe doit être choisi')</script>"; }
    if (empty($password_2)) { echo "<script type='text/javascript'>alert('Vous n\'avez pas confirmé votre mot de passe')</script>"; }

    if ($password_1 != $password_2) {
        echo "<script type='text/javascript'>alert('Les deux mots de passes ne coïncident pas')</script>";
    }

    // Inserting data into table
    $sql = "INSERT INTO users(LOGIN_USERS,PASSWORD_USERS,EMAIL_USERS) "
        . " VALUES(?, ?, ?)";

    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST["login"]);
    $requete->bindValue(2, $_POST["password_1"]);
    $requete->bindValue(3, $_POST["email"]);

    $requete->execute();


    $_SESSION['login'] = $_POST["login"];
    header('location: ../../profile.php');

}
