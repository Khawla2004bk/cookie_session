<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: connexion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de Bord</title>
</head>
<body>
    <div>
        <h1>Bienvenue, <?= htmlspecialchars($_SESSION['username']) ?> !</h1>
        
        <a href="deconnexion.php">Déconnexion</a>
    </div>
</body>
</html>
