<?php
$host = 'localhost';
$dbname = 'corpany_project_intranet';
$username = 'root'; // Par défaut sous Wamp
$password = ''; // Laisse vide si pas de mot de passe sous Wamp

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
