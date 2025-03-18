<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirige vers la connexion si non connecté
  exit;
}
  
$role = $_SESSION['role']; // Récupère le rôle de l'utilisateur

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corp - Outils</title>
  <link rel="stylesheet" href="../ressources/css/global.css">
  <link rel="stylesheet" href="../ressources/css/unique/outils.css">
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
            <i class="fa-solid fa-user"></i>
            Mon profil
          </a>
          <a href="outils.php">
            <i class="fa-solid fa-toolbox"></i>
            Mes outils
          </a>
          <a href="calendar.php">
            <i class="fa-solid fa-calendar-minus"></i>
            Calendrier
          </a>
          <a href="actualite.php">
            <i class="fa-solid fa-newspaper"></i>
            Actualité
          </a>
          <a href="authentification/logout.php" id="deco">
            <i class="fa-solid fa-user-slash"></i>
            Déconnexion
          </a>
        </div>
      </div>
      <div class="banner">
        <h1>
          <i class="fa-solid fa-toolbox"></i>
          Outils
        </h1>
      </div>
    </header>

    <!-- Section -->
    <section>

      <!-- Articles -->
      <article>
        <a href="#" class="outils">
          <h2>Outil 1</h2>
        </a>
        <a href="#" class="outils">
          <h2>Outil 2</h2>
        </a>
        <?php if ($role === 'administrateur'): ?>
          <a href="gestion.php" class="outils">
            <h2>Gestion du personnel</h2>
            <i class="fa-solid fa-lock"></i>
          </a>
          <a href="authentification/register.php" class="outils">
            <h2>Création de profils</h2>
            <i class="fa-solid fa-lock"></i>
          </a>
          <a href="authentification/delete.php" class="outils">
            <h2>Supression de profils</h2>
            <i class="fa-solid fa-lock"></i>
          </a>
        <?php endif; ?>
      </article>
    </section>

    <!-- Footer -->
    <footer>
      <div class="footer-link">
        <div class="reseaux">
          <a href="#">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            social
          </a>
          <a href="#">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            social
          </a>
          <a href="#">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            social
          </a>
          <a href="#">
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            social
          </a>
          <a href="footer/information.php">
            <i class="fa-solid fa-circle-info"></i>
            information
          </a>
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