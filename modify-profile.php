<?php
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['msg'] = "Vous devez vous connectez afin de modifiez votre profil";
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
    <link rel="stylesheet" href="css/mes_css/layout-forms.css">
    <link rel="icon" href="/img/logo_menu.png">

    <title>Modifiez votre profil | AlterinGames</title>
</head>

<body class="modify-profil">
<header>
    <img src="img/image_settings.png" alt="image d'illustration paramètres" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">
    <h1>devenez les maîtres du jeu</h1>

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
            <li class="menu-lien-secondaire"><a href="settings.php">Paramètres</a></li>
        </ul>
        <h1>prenez le contrôle des règles</h1>
        <img src="img/logo_menu.png" alt="Logo AlterinGames: Alter the rules" class="claire">
    </nav>
</header>

<main>
    <div class="modify-icon">
        <img src="img/image_profil_pic.png" alt="photo de profil" class="profil_pic-modify">
        <p class="text-modify">Modifier</p>
    </div>
    <div class="modify-icon">
        <img src="img/image_profil_background.png" alt="bannière" class="profil_banner-modify">
        <p class="text-modify">Modifier</p>
    </div>
    <form id="form-modify-profile" action="backend/AlterinGames_backend/updateUsers.php" method="post">
        <label>Pseudo</label>
        <input type="text" name="login">
        <label>Adresse mail</label>
        <input type="text" name="mail">
        <label>Votre description</label>
        <input type="text" name="bio">
        <label>Nouveau mot de passe</label>
        <input type="password" name="password">
        <input type="submit" value="Enregistrer">
    </form>
    <button class="button-suppr"><span class="orange">Supprimer</span> de votre profil</button>
</main>

<footer>
    <div class="mentions">
        <p>Ce site a été créé par Charles Mangin, Julien Ferré, et Floran Marchal, étudiants au DUT MMI de Montbéliard</p>
        <p>Ce projet a été réalisé dans le cadre d’un exercice pédagogique au département MMI de Montbéliard</p>
        <p>Tous droits de reproduction et de diffusion réservés © 2021</p>
    </div>
    <div class="footer_links">
        <a href="settings.php">Paramètres</a>
        <a href="contact.php#contact">Nous contacter</a>
        <a href="contact.php#projets">Découvrez nos autres projets</a>
    </div>
</footer>
</body>
</html>