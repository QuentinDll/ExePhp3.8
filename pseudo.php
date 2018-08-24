<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="http://exephpp8">Accueil</a>
            <h1>Exercice 4</h1>
            <a href="http://exephpp8/exephp3p8/modif.php">Exercice 5</a>
        </nav>
        <?php
        // si le cookie pseudo ne contient pas de pseudo
        if (empty($_COOKIE['login'])) {
            ?>
            <p>Pseudo non défini</p>  
        <?php } else { ?>
            <p>Votre pseudo : <?= $_COOKIE['login']; ?></p>
        <?php } ?>
        <?php
        // si le cookie ne contient pas de mot de passe
        if (empty($_COOKIE['password'])) {
            ?>
            <p>Mot de passe non défini</p>
        <?php } else { ?>
            <p>Votre mot de passe : <?= $_COOKIE['password']; ?></p>
        <?php } ?>
        <a href="http://exephpp8/exephp3p8/index.php">Exercice 3</a>
    </body>
</html>
