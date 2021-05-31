<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lib/normalize.css">
    <link rel="stylesheet" href="css/mes_css/layout-main.css">
    <link rel="stylesheet" href="css/mes_css/layout-index.css">
    <link rel="stylesheet" href="css/mes_css/layout-footer.css">
    <link rel="stylesheet" href="css/mes_css/menu.css">
    <link rel="stylesheet" href="css/mes_css/layout-forms.css">
    <link rel="icon" href="/img/logo_menu.png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("form-contact").submit();
        }

        const constraints = {
            name: {
                presence: { allowEmpty: false }
            },
            email: {
                presence: { allowEmpty: false },
                email: true
            },
            message: {
                presence: { allowEmpty: false }
            }
        };

        const form = document.getElementById('form-contact');

        form.addEventListener('submit', function (event) {
            const formValues = {
                name: form.elements.name.value,
                email: form.elements.email.value,
                message: form.elements.message.value
            };

            const errors = validate(formValues, constraints);

            if (errors) {
                event.preventDefault();
                const errorMessage = Object
                    .values(errors)
                    .map(function (fieldValues) { return fieldValues.join(', ')})
                    .join("\n");

                alert(errorMessage);
            }
        }, false);
    </script>


    <title>Contact | AlterinGames</title>
</head>

<body class="contact">
<header>
    <img src="img/image_dice_phone.png" alt="Dé sur un fond noir" class="img_head">
    <img src="img/logo.webp" alt="Logo AlterinGames: Alter the rules" class="logo claire">
    <h1>prenez le contrôle des règles</h1>

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
    <h3><span class="orange">AlterinGames</span>, c'est ...</h3>
    <h4>Une équipe de passionnées</h4>

    <div class="equipe">
        <div class="membre">
        <img src="img/photo_charles.webp" alt="photographie charles">
        <p><span class="orange">Charles</span> Mangin</p>
        <p><a href="https://www.instagram.com/charles_0229/" target="_blank"><img src="img/instagram_icon.png" alt="icône instagram" class="instagram-icon"><span class="orange">@</span>charles<span class="orange">_</span>0229</a></p>
        </div>

        <div class="membre">
        <img src="img/photo_julien.webp" alt="photographie julien">
        <p><span class="orange">Julien</span> Ferré</p>
        <p><a href="https://www.instagram.com/juju_le_vidmaker/" target="_blank"><img src="img/instagram_icon.png" alt="icône instagram" class="instagram-icon"><span class="orange">@</span>juju<span class="orange">_</span>le<span class="orange">_</span>videomaker</a></p>
        </div>

        <div class="membre">
        <img src="img/photo_floran.webp" alt="photographie floran">
        <p><span class="orange">Floran</span> Marchal</p>
        <p><a href="https://www.instagram.com/floragon222/" target="_blank"><img src="img/instagram_icon.png" alt="icône instagram" class="instagram-icon"><span class="orange">@</span>floragon222</a></p>
        </div>
    </div>

    <p>Mais c'est aussi bien sûr chacun d'entre <span class="orange">vous</span> !</p>

    <h3 id="projets">Nos <span class="orange">autres projets</span></h3>
    <ul>
        <li><a href="https://projets1.charlesmangin.fr" target="_blank">> IA - Un avenir pas si rose ?</a></li>
        <li><a href="https://projets1.julienferre.fr" target="_blank">> Terminateur Web</a></li>
        <li><a href="https://projets1.floranmarchal.fr" target="_blank">> Rescom</a></li>
    </ul>

    <h3 id="contact"><span class="orange">Contactez</span>-nous</h3>
    <form id="form-contact" method="POST" action="backend/AlterinGames_backend/contact.php">
        <label>Sujet</label>
        <input type="text" name="sujet" required>
        <label>Adresse mail</label>
        <input type="text" name="mail" required>
        <label>Message</label>
        <input type="text" name="message" required>
        <input class="g-recaptcha"
               data-sitekey="6LfVlgIbAAAAAIYYwFMVHjt8G1C70ahSpHL6pCBU"
               data-callback='onSubmit'
               type="submit"
               value="Envoyez">
    </form>
    <?php
        if (!empty($errors)) {
           $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: darkorange;'>{$allErrors}</p>";
            }
    ?>
</main>

<footer>
    <div class="mentions">
        <p>Ce site a été créé par Charles Mangin, Julien Ferré, et Floran Marchal, étudiants au DUT MMI de Montbéliard</p>
        <p>Ce projet a été réalisé dans le cadre d’un exercice pédagogique au département MMI de Montbéliard</p>
        <p>Tous droits de reproduction et de diffusion réservés © 2021</p>
    </div>
    <div class="footer_links">
        <a href="settings.php">Paramètres</a>
        <a href="contact.html#contact">Nous contacter</a>
        <a href="contact.html#projets">Découvrez nos autres projets</a>
    </div>
</footer>
</body>
</html>