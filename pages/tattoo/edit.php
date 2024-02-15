<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un tattoo</title>
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

    <h1 class="title">Editer un tattoo</h1>

    <form action="../../assets/php/controllers/crud_tattoo/update_tattoo.php" method="POST">
        <div>
            <select class="inputsize text" name="tattoo-name" id="tattoo-name">
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
        <label class="textgrid margin-y" for="url">Url</label>
            <input class="inputsize text" type="text" id="url" name="url">
        </div>
        <div>
        <label class="textgrid margin-y" for="name">Name</label>
            <input class="inputsize text" type="text" id="name" name="name">
        </div>
        <div>
        <label class="textgrid margin-y" for="categorie">Categorie</label>
            <input class="inputsize text" type="text" id="categorie" name="categorie">
        </div>
        <div>
        <label class="textgrid margin-y" for="description">Description</label>
            <input class="inputsize text" type="description" id="description" name="description">
        </div>
        <div>
            <button class="button" type="submit">Envoyer</button>
        </div>
    </form>

</body>
</html>