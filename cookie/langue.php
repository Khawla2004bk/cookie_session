<?php
$langues = [
    'fr' => 'Français',
    'en' => 'English',
    'ar' => 'arabe'
];

if (isset($_POST['langue'])) {
    $choix = $_POST['langue'];
    
    if (array_key_exists($choix, $langues)) {
        setcookie('langue_prefere', $choix, time() + 3600);
        
        header('Location: ./langue.php');
        exit();
    }
}

$langue_active = $_COOKIE['langue_prefere'] ?? 'fr';

$messages = [
    'fr' => "Votre langue préférée est le français",
    'en' => "Votre langue préférée est l'anglais",
    'ar' => "Votre langue préférée est l'arabe"
];

$message = $messages[$langue_active];
?>

<!DOCTYPE html>
<html lang="<?= $langue_active ?>">
<head>
    <meta charset="UTF-8">
    <title>Sélection de Langue</title>
</head>
<body>
    <div>
        <h1>Sélection de Langue</h1>
        
        <form method="post">
            <?php foreach ($langues as $code => $nom): ?>
                <button type="submit" name="langue" value="<?= $code ?>">
                    <?= $nom ?>
                </button>
            <?php endforeach; ?>
        </form>
    </div>

    <div>
        <p><?= $message ?></p>
    </div>
</body>
</html>
