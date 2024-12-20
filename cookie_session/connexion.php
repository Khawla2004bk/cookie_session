<?php
session_start();

if (isset($_COOKIE['user'])) {
    $_SESSION['username'] = $_COOKIE['user'];
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']) ? true : false;

    if (!empty($username) && !empty($password)) {
        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie('user', $username, time() + 3600);
        }
        header('Location: index.php');
        exit();
    }
} 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <div>
        <h2>Connexion</h2>
        
        <form method="post">
            <div >
                <label for="username">usename:</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">password:</label>
                <input type="password" name="password" required>
            </div>
            
            <div>
                <input type="checkbox"name="remember">
                <label for="remember">remember me</label>
            </div>
            
            <button type="submit">Connexion</button>
        </form>
    </div>
</body>
</html>
