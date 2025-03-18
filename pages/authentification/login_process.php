<?php
session_start(); // Démarrer la session
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password']; // Vérification en clair

    if (!empty($username) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT id, username, password, role FROM utilisateur WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && $user['password'] === $password) { // Comparaison directe
            // Stocker les infos utilisateur en session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header("Location: ../profil.php");
            exit;
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
