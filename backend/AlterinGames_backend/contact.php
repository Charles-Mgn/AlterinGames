<?php

    $errors = [];

    if (!empty($_POST)) {
        $sujet = $_POST['sujet'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={6LfVlgIbAAAAAOj7vwCyxIywjX1NURR1fK8yW92Y}&response={$recaptchaResponse}";
        $verify = json_decode(file_get_contents($recaptchaUrl));

        if (!$verify->success) {
            $errors[] = 'Recaptcha failed';
        }

        if (empty($sujet)) {
            $errors[] = 'Vous n\'avez pas rentré de sujet';
        }

        if (empty($mail)) {
            $errors[] = 'Vous n\'avez pas renseigné d\'adresse mail';
        } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Adresse mail non valide';
        }

        if (empty($message)) {
            $errors[] = 'Vous n\'avez pas écrit votre message';
        }


        if (empty($errors)) {
            $toEmail = 'charlesmangin.98@gmail.com';
            $mailSubject = 'Nouveau mail d\'ALTERINGAMES';
            $headers = ['From' => $mail, 'Reply-To' => $mail, 'Content-type' => 'text/html; charset=iso-8859-1'];

            $bodyParagraphs = ["Sujet: {$sujet}", "Email: {$mail}", "Message:", $message];
            $body = join(PHP_EOL, $bodyParagraphs);

            if (mail($toEmail, $mailSubject, $body, $headers)) {
                header('Location: thank-you.html');
            } else {
                $errorMessage = 'Oops, une erreur s\'est produite. Merci de réessayer plus tard.';
            }
        } else {
            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: darkorange;'>{$allErrors}</p>";
        }

    }
