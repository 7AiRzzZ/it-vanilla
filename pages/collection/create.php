<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Collection</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="margin-x">
                    <a href="../index.php">Accueil</a>
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
    <form action="../../assets/php/controllers/user_collection/create_collection.php" method="POST">
        <div>
            <select name="user_alias" id="user_alias">
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
            <select name="tattoo_name" id="tattoo_name">
                <option value="">-- Choisir un tattoo --</option>
                <?php
                    require_once('../../assets/php/middleware/connect.php');

                    $query_tattoo = $db_connect->query('SELECT * FROM tattoo');

                    foreach($query_tattoo as $tattoo)
                    {

                        $tattoo_name = $tattoo['name'];
                        echo "<option value=$tattoo_name>$tattoo_name</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <select name="creation_name" id="creation_name">
                <option value="">-- Choisir une création --</option>
                <?php
                    require_once('../../assets/php/middleware/connect.php');

                    $query_creation = $db_connect->query('SELECT * FROM creation');

                    foreach($query_creation as $creation)
                    {

                        $creation_name = $creation['name'];
                        echo "<option value=$creation_name>$creation_name</option>";
                    }
                ?>
            </select>
        </div>
        <div class="button">
            <button  type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>