<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les tattoo</title>
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
    
    <h1 class="title">Liste des tattoos</h1>
<div class="container1">

    <?php 

require_once('../../assets/php/middleware/connect.php');

$query_tattoos = $db_connect->query('SELECT * FROM tattoo');

foreach ($query_tattoos as $tattoos) {
    $url = $tattoos['url'];
    echo "<img class='margin-x' src='$url' width='150px' height='150px' />" . '<br />';
}

?>
</div>
</body>
</html>