<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un tattoo</title>
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

    <form action="../../assets/php/controllers/crud_tattoo/delete_tattoo.php" method="post">
    <div>
        <h1 class="title">Supprimer un tatouage</h1>
    </div>
    <div>
            <select  class="inputsize text" name="tattoo-name" id="tattoo-name">
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

            <button class="button" type="submit">Supprimer</button>
        </div>
    </form>

</body>
</html>