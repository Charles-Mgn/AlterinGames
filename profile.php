<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['login'])) {
    $_SESSION['msg'] = "Vous devez vous connecter pour accéder à votre profil";
    header('location: login.html');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lib/normalize.css">
    <link rel="stylesheet" href="css/mes_css/layout-main.css">
    <link rel="stylesheet" href="css/mes_css/layout-secondary.css">
    <link rel="stylesheet" href="css/mes_css/layout-footer.css">
    <link rel="stylesheet" href="css/mes_css/menu.css">

    <title>Profil | AlterinGames</title>

</head>

<body>
<header>
    <img src="img/image_profil_background.png" alt="bannière" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">
    <img src="img/image_profil_pic.png" alt="photo de profil" class="profil_pic">
    <?php  if (isset($_SESSION['login'])) : ?>
        <h1>
            <?php echo $_SESSION['login']; ?>
        </h1>
    <?php endif ?>
    <p>17<!--NB ALTERS--> Alters</p>

    <!--MENU-->
    <div class="nav-toggle" onclick='document.documentElement.classList.toggle("menu-open")'>
        <div class="nav-toggle-bar"></div>
    </div>
    <nav class="menu">
        <ul>
            <li class="menu-lien-principal"><a href="index.html">Accueil</a></li>
            <li class="menu-lien-principal"><a href="board-games.html">Jeux de société</a></li>
            <li class="menu-lien-principal"><a href="card-games.html">Jeux de cartes</a></li>
            <li class="menu-lien-principal"><a href="tools.html">Outils</a></li>
            <li class="menu-lien-secondaire"><a href="">Profil</a></li>
            <li class="menu-lien-secondaire"><a href="settings.html">Paramètres</a></li>
        </ul>
        <h1>prenez le contrôle des règles</h1>
        <img src="img/logo_menu.png" alt="Logo AlterinGames: Alter the rules" class="claire">
    </nav>
</header>

<main>
    <div>
        <h4>Badges</h4>
        <ul>
            <li><a href=""></a><img src="img/badge_1.png" alt="badge 1"></a></li>

            <!-- BADGES

            <li><a href=""></a><img src="img/badge_2.png" alt="badge 2"></a></li>
            <li><a href=""></a><img src="img/badge_3.png" alt="badge 3"></a></li>
            <li><a href=""></a><img src="img/badge_4.png" alt="badge 4"></a></li>
            <li><a href=""></a><img src="img/badge_5.png" alt="badge 5"></a></li>

            -->
        </ul>
    </div>
    <div>
        <h4>Avis récents</h4>
        <p><a href="rules/risk-tres-riske.html"><span class="orange"><!--JEU-->Risk</span> | <!--JEU--> Très Riské : <span class="orange"><!--VOTE-->OUI</span> !</a></p>
        <p><a href="rules/bataille-doublons.html"><span class="orange"><!--JEU-->Bataille</span> | <!--JEU--> Doublons : <span class="orange"><!--VOTE-->NON</span> !</a></p>
    </div>
    <div>
        <h4>Mes favoris</h4>
        <p><a href="rules/risk-tres-riske.html"><span class="orange"><!--JEU-->Risk</span> | <!--JEU--> Très Riské</a></p>
    </div>
    <div>
        <h4>Sur moi</h4>
        <?php  if (isset($_SESSION['login'])) : ?>
            <p>
                <?php include_once 'backend/AlterinGames_backend/getUsersDesc.php'; ?>
            </p>
        <?php endif ?>
    </div>
</main>

<footer>
    <div class="mentions">
        <p>Ce site a été créé par Charles Mangin, Julien Ferré, et Floran Marchal, étudiants au DUT MMI de Montbéliard</p>
        <p>Ce projet a été réalisé dans le cadre d’un exercice pédagogique au département MMI de Montbéliard</p>
        <p>Tous droits de reproduction et de diffusion réservés © 2021</p>
    </div>
    <div class="footer_links">
        <a href="settings.html">Paramètres</a>
        <a href="contact.html#contact">Nous contacter</a>
        <a href="contact.html#projets">Découvrez nos autres projets</a>
    </div>
</footer>
</body>
</html>