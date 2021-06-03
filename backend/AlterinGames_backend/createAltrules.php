<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';
require_once 'classes/class.Users.php';
require_once 'classes/class.Game.php';
require_once 'classes/class.Altrules.php';
require_once 'classes/class.Belongs.php';
require_once 'classes/class.Publishes.php';

session_start();

if(isset($_POST['alt_name'])){

        $sql = "INSERT INTO altrules(NAME_ALTRULES,DESC_ALTRULES)"
            . " VALUES(?, ?)";

        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST["alt_name"]);
        $requete->bindValue(2, $_POST["alt_desc"]);

        header('location: ../../profile.php');

}else{
    // Format passé non conforme
    echo -1;
}
