<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirige vers la connexion si non connecté
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corp - Calendar</title>
  <link rel="stylesheet" href="../ressources/css/global.css">
  <link rel="stylesheet" href="../ressources/css/unique/calendar.css">
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
          <i class="fa-solid fa-calendar-minus"></i>
          Calendar
        </h1>
      </div>
    </header>

    <!-- Section (contenu) -->
    <section>

      <!-- Articles -->
      <article>
        <!-- Barre de recherche (1) -->
        <div class="searchbar">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="search" id="search" data-search>
          <input type="submit" id="submit" value="Chercher">
        </div>
        <!-- Calendrier (2) -->
        <div class="calendar">
          <div class="header">
            <div id="prev" class="btn"><i class="fa-solid fa-arrow-left"></i></div>
            <div id="month-year"></div>
            <div id="next" class="btn"><i class="fa-solid fa-arrow-right"></i></div>
          </div>
          <div class="weekdays">
            <div>Lun</div>
            <div>Mar</div>
            <div>Mer</div>
            <div>Jeu</div>
            <div>Ven</div>
            <div>Sam</div>
            <div>Dim</div>
          </div>
          <div class="days" id="days"></div>
        </div>
        <script src="../ressources/js/calendar.js"></script>
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