<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un tattoo</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="  margin-x" >
                    <a href="../../index.php">Accueil</a>
                </li>
                <li class="  margin-x">
                    <a href="./show.php">Afficher</a>
                </li>
                <li class="  margin-x">
                    <a href="./create.php">Créer</a>
                </li>
                <li class="  margin-x">
                    <a href="./edit.php">Editer</a>
                </li>
                <li class="  margin-x">
                    <a href="./delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <h1 class="title">Tattoo create</h1>
    </div>
    <form class="" action="../../assets/php/controllers/crud_tattoo/create_tattoo.php" method="POST">
        <div class="margin-y">
            <label class="textgrid" for="url">Url</label>
            <input class="inputsize text" type="text" id="url" name="url">
        </div>
        <div class="margin-y">
            <label class="textgrid" for="categorie">Categorie</label>
            <input class="inputsize text" type="text" id="categorie" name="categorie">
        </div>
        <div class="margin-y">
            <label class="textgrid" for="name">Name</label>
            <input class="inputsize text" type="text" id="name" name="name">
        </div>
        <div class="margin-y">
            <label class="textgrid" for="description">Description</label>
            <input class="inputsize text" type="text" id="description" name="description">
        </div>
        <div>

            <button  class="button" type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>