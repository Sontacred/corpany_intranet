<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../ressources/css/unique/authentification.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>

<body>

    <!-- Section -->
    <section>
        <div class="vertical-corner">
            <strong>Inscription</strong>
        </div>
        <article>
            <form action="register_process.php" method="POST">
                Pseudo <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
                Email : <input type="email" name="email" placeholder="Email" required><br>
                Mot de passe : <input type="password" name="password" placeholder="Mot de passe" required><br>

                <label for="role">Rôle :</label>
                <select name="role" id="role" required>
                    <option value="administrateur">Administrateur</option>
                    <option value="ressources_humaines">Ressources Humaines</option>
                    <option value="logistique">logistique</option>
                    <option value="informatique">Informatique</option>
                </select><br>
                <input type="submit" id="submit">
            </form>
        </article>
    </section>

</body>

</html>