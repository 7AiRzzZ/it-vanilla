<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
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

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_collections = $db_connect->query('SELECT * FROM user_collection');

    foreach ($query_collections as $collections) {
        echo $collections['user_alias']  . '<br/>';
    }

    ?>

    <div>
        <h1>Liste des tattoos</h1>
        <?php
            $query_collections = $db_connect->query('SELECT t.url, t.name FROM user_collection uc INNER JOIN tattoo t ON uc.tattoo_name = t.name');

            foreach ($query_collections as $picture) {
                $picture_url = $picture['url'];
                $picture_name = $picture['name'];


                echo $picture_name . '<br />';
                echo "<img src='$picture_url' width='150px' height='150px' />" . '<br />';
            }
        ?>
    </div>
    <div>
        <h1>Liste des créations</h1>
        <?php
            $query_collections = $db_connect->query('SELECT c.url, c.name FROM user_collection uc INNER JOIN creation c ON uc.creation_name = c.name');

            foreach ($query_collections as $picture) {
                $picture_url = $picture['url'];
                $picture_name = $picture['name'];


                echo $picture_name . '<br />';
                echo "<img src='$picture_url' width='150px' height='150px' />" . '<br />';
            }
        ?>
    </div>
</body>
</html>