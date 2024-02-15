<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
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
        <h1 class="title">Supprimer un utilisateur</h1>
    </div>
    <form action="../../assets/php/controllers/crud_users/delete_users.php" method="POST">
        <div>
            <select class="inputsize text" name="user-alias" id="user-alias">
                <option value="">-- Choisir un utilisateur --</option>
                <?php
                    require_once('../../assets/php/middleware/connect.php');

                    $query_user= $db_connect->query('SELECT * FROM user');

                    foreach($query_user as $user)
                    {

                        $user_alias = $user['alias'];
                        echo "<option value=$user_alias>$user_alias</option>";
                    }
                ?>
            </select>
        </div>
        <div>

            <button class="button" type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>