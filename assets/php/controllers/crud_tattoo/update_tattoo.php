<?php

require_once('../../middleware/connect.php');

$tattoo_name = $_POST['tattoo-name'];
$categorie = $_POST['categorie'];
$url = $_POST['url'];
$description = $_POST['description'];
$name = $_POST['name'];

$db_connect->query("UPDATE tattoo SET categorie = '$categorie' , url ='$url', name = '$name', description = '$description' WHERE tattoo.name = '$tattoo_name'");

header("Location: http://localhost/public/imagination-vanilla");


