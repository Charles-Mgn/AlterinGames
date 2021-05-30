<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        $_SESSION['msg'] = "Vous devez vous connectez afin de poster vos règles";
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

    <title>Je contribue | AlterinGames</title>
</head>

<body class="page-rules">
<header>
    <img src="img/image_profil_background.png" alt="photo de profil" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">
    <h1>
        <select>
            <option value="">Bataille</option>
            <option value="">Cluedo</option>
            <option value="">Loups-garous</option>
            <option value="">Monopoly</option>
            <option value="">Poker</option>
            <option value="">Qui-est ce ?</option>
            <option value="">Risk</option>
            <option value="">Scrabble</option>
            <option value="">7 Familles</option>
            <option value="">UNO</option>
        </select>
    </h1>
    <h2>
        <input type="text">
    </h2>

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
            <li class="menu-lien-secondaire"><a href="profile.php">Profil</a></li>
            <li class="menu-lien-secondaire"><a href="settings.html">Paramètres</a></li>
        </ul>
        <h1>prenez le contrôle des règles</h1>
        <img src="img/logo_menu.png" alt="Logo AlterinGames: Alter the rules" class="claire">
    </nav>
</header>

<main>
    <img src="img/image_profil_pic.png" alt="photo de profil">
    <p><!--LE CREATEUR-->LUC_K</p>

    <p>Que nous proposez-vous aujourd'hui ?</p>
    <input type="text">

    <input type="submit">

    <a href="games/poker.html" class="bouton-sobre">Retour</a>
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