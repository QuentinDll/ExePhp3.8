<?php
// modificatio des valeur du cookie login
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    setcookie('login', $login, time() + (86400 * 30));
}
// modification des valeur du cookie password
if (!empty($_POST['password'])) {
    $password = $_POST['password'];
    setcookie('password', $password, time() + (86400 * 30));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="http://exephpp8">Acceuile</a>
            <h1>Exercice 5</h1>
        </nav>
        <form action="#" method="POST">
            <p>
                <label>Login: </label>
                <input type="text" name="login"/>
                <label>Password: </label>
                <input type="password" name="password"/>
                <button type="submit" name="valider">Submit</button>
            </p>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['login'])) {
                ?>
                <p>Login non défini</p>
            <?php } else { ?>
                <p>Votre login modifie : <?= $_POST['login']; ?></p>
            <?php } ?>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['password'])) {
                ?>
                <p>Mot de passe non défini</p>
            <?php } else { ?>
                <p>Votre mot de passe modifie : <?= $_POST['password']; ?></p>
            <?php } ?>
        </form>
    </body>
</html>
