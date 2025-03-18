<?php
session_start();
require 'authentification/config.php';

// Vérifie si l'utilisateur est connecté et s'il est admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'administrateur') {
    header("Location: login.php");
    exit;
}

// Récupérer tous les utilisateurs
$stmt = $pdo->query("SELECT id, username, email, role FROM utilisateur");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
    <link rel="stylesheet" href="../ressources/css/global.css">
    <link rel="stylesheet" href="../ressources/css/unique/gestion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="bloc_page">

        <!-- Header -->
        <header>
            <div class="vertical-corner">
                <div class="titre">
                    <i class="fa-solid fa-globe"></i>
                    <strong>Intra.Corpany</strong>
                </div>

                <!-- navbar -->
                <div class="navbar">
                    <a href="profil.php">
                        <i class="fa-solid fa-user"></i> Mon profil
                    </a>
                    <a href="outils.php">
                        <i class="fa-solid fa-toolbox"></i> Mes outils
                    </a>
                    <a href="calendar.php">
                        <i class="fa-solid fa-calendar-minus"></i> Calendrier
                    </a>
                    <a href="actualite.php">
                        <i class="fa-solid fa-newspaper"></i> Actualité
                    </a>
                    <a href="authentification/logout.php" id="deco">
                        <i class="fa-solid fa-user-slash"></i> Déconnexion
                    </a>
                </div>
            </div>
            <div class="banner">
                <h1><i class="fa-solid fa-users-gear"></i> Gestion des utilisateurs</h1>
            </div>
        </header>

        <!-- Section -->
        <section>
            <!-- Articles -->
            <article>
                <?php foreach ($users as $user): ?>
                    <div class="user">
                        <div class="name">
                            <img src="../ressources/img/USER.webp">
                            <h2><?php echo htmlspecialchars($user['username']); ?></h2>
                        </div>
                        <div class="infos">
                            <p><strong><?php echo htmlspecialchars($user['role']); ?></strong></p>
                            <p><?php echo htmlspecialchars($user['email']); ?></p>
                        </div>
                        <div class="action-btn">
                          <input type="submit" id="modifier" value="Modifier">
                          <input type="submit" id="supprimer" value="Supprimer">
                        </div>
                    </div>
                <?php endforeach; ?>
            </article>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-link">
                <div class="reseaux">
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> social</a>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> social</a>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> social</a>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i> social</a>
                    <a href="footer/information.php"><i class="fa-solid fa-circle-info"></i> information</a>
                </div>
                <a href="#"><i class="fa-solid fa-rotate-right"></i></a>
            </div>
            <div class="vertical-corner">
                <p>&copy; Corpany tout droits réservé</p>
                <p>Développé par : ELANA Lucas</p>
            </div>
        </footer>
    </div>

</body>

</html>
