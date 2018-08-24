<?php
if (!empty($_POST)) {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        setcookie('login', $login, time() + (86400 * 30));
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        setcookie('password', $password, time() + (86400 * 30));
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="http://exephpp8">Acceuile</a>
            <h1>Exercice 3</h1>
            <a href="http://exephpp8/exephp3p8/pseudo.php">Exercice 4</a>
        </nav>
        <form action="index.php" method="POST">
            <label>Login: </label>
            <input type="text" name="login" value=""/>
            <label>Password: </label>
            <input type="password" name="password" value=""/>
            <button type="submit" name="valider">Submit</button>
        </form>
    </body>
</html>
