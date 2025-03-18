<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../../ressources/css/unique/authentification.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>

<body>

    <!-- Section -->
    <section>
        <div class="vertical-corner">
            <strong>Connexion</strong>
        </div>
        <article>
            <form action="login_process.php" method="POST">
                Pseudo <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
                Mot de passe : <input type="password" name="password" placeholder="Mot de passe" required><br>
                <input type="submit" id="submit">
            </form>
        </article>
    </section>

</body>

</html>