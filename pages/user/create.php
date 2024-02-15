<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="margin-x">
                    <a href="../../index.php">Accueil</a>
                </li>
                <li class="margin-x">
                    <a href="./show.php">Afficher</a>
                </li>
                <li class="margin-x">
                    <a href="./create.php">Créer</a>
                </li>
                <li class="margin-x">
                    <a href="./edit.php">Editer</a>
                </li>
                <li class="margin-x">
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <h1 class="title">Créer un utilisateur</h1>
    </div>
    <form action="../../assets/php/controllers/crud_users/create_users.php" method="POST">
        <div>
            <label class="textgrid" for="email">Email</label>
            <input class="inputsize text type="text" id="email" name="email">
        </div>
        <div>
            <label class="textgrid" for="alias">Pseudonyme</label>
            <input class="inputsize text type="text" id="alias" name="alias">
        </div>
        <div>
            <label class="textgrid" for="password">Mot de passe</label>
            <input class="inputsize text type="password" id="password" name="password">
        </div>
        <div>

            <button class="button" type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>