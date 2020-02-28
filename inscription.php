<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/styles.css">
    <title>Inscription</title>
</head>
<body>
    <section class="centerPage">
        <h1>Formulaire d'inscription</h1>
        <form id="formInscription" action="confirmation-inscription.php" method="post">
            <input type="text" placeholder="Handle RSI" required name="pseudo" value=
                <?php if(isset($_SESSION['pseudo']))
                    { echo $_SESSION['pseudo'];
                    }else{
                       echo '';}?>>
            <input id="password" type="password" name="pass" placeholder="Mot de passe" required >
            <input id="confirm_password" type="password" name="pass_verif" placeholder="Confirmation du mot de passe" required >
            <input type="email"  name="email" required placeholder="Adresse e-mail de contact"  value=<?php
                if(isset($_SESSION['email']))
                    {echo $_SESSION['email'];
                }else{
                    echo '';}?>>
            <button type="submit">Valider</button>
        </form>
    </section>
</body>
</html>