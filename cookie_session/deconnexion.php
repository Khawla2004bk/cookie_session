<?php
session_start();

session_unset();

session_destroy();

if (isset($_COOKIE['user_remember'])) {
    setcookie('user_remember', '', time() - 3600);
}

// header(header: 'Location: connexion.php');
?>
<p>vous etes deconnécté</p>