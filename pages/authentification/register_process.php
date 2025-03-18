<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password']; // Mot de passe en clair (non sécurisé)
    $role = $_POST['role'];

    // Vérification des valeurs valides pour le rôle
    if ($role !== "administrateur" && $role !== "ressources_humaines" && $role !== "logistique" && $role !== "informatique" && $role !== "employe") {
        die("Rôle invalide !");
    }

    if (!empty($username) && !empty($email) && !empty($password)) {
        $stmt = $pdo->prepare("INSERT INTO utilisateur (username, email, password, role) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$username, $email, $password, $role])) {
            echo "Inscription réussie. <a href='login.php'>Se connecter</a><br/>";
        } else {
            echo "Erreur lors de l'inscription.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>