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
    <link rel="stylesheet" href="css/mes_css/layout-forms.css">
    <link rel="icon" href="/img/logo_menu.png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("form-contribute").submit();
        }
    </script>

    <title>Je contribue | AlterinGames</title>
</head>

<body class="page-rules">
<header>
    <img src="img/image_profil_background.png" alt="photo de profil" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">

    <h1>Postez une règle</h1>
    <h2> </h2>
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
        <h1>devenez les maîtres du jeu</h1>
        <img src="img/logo_menu.png" alt="Logo AlterinGames: Alter the rules" class="claire">
    </nav>
</header>

<main>
    <div>
        <p>Que nous proposez-vous aujourd'hui ?</p>
    </div>

    <form id="form-contribute" action="backend/AlterinGames_backend/createAltrules.php" method="post">

    <h1>
        <select required name="game">
            <option value="Bataille">Bataille</option>
            <option value="Cluedo">Cluedo</option>
            <option value="Loups-garous">Loups-garous</option>
            <option value="Monopoly">Monopoly</option>
            <option value="Poker">Poker</option>
            <option value="Qui-est ce ?">Qui-est ce ?</option>
            <option value="Risk">Risk</option>
            <option value="Scrabble">Scrabble</option>
            <option value="7 Familles">7 Familles</option>
            <option value="UNO">UNO</option>
        </select>
    </h1>

    <h2>
        <input type="text" placeholder="Nom de votre règle" name="alt_name" required>
    </h2>

    <textarea cols="35" rows="10" name="alt_desc" required placeholder="Décrivez votre règle" maxlength="2000"></textarea>
    <input type="submit"
           value="Partagez"
           class="final-submit g-recaptcha"
           data-sitekey="6LfVlgIbAAAAAIYYwFMVHjt8G1C70ahSpHL6pCBU"
           data-callback='onSubmit'>
    </form>

    <a href="games/poker.html" class="bouton-sobre bouton-return">Retour</a>
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