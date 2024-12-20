<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: connexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <div>
        <h1>Bienvenue, <?= htmlspecialchars($_SESSION['username']) ?> ton mot de passe est <?=htmlspecialchars($_SESSION['password']) ?> !</h1>
        <p>Vous êtes maintenant connecté.</p>
    </div>

    <a href="deconnexion.php">Déconnexion</a>
</body>
</html>
