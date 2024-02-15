<?php

require_once('../../middleware/connect.php');

$categorie = $_POST['categorie'];
$url = $_POST['url'];
$description = $_POST['description'];
$name = $_POST['name'];


$db_connect->query("INSERT INTO tattoo (id, categorie, url , description , name ) VALUES (NULL, '$categorie', '$url', '$description ' , '$name')");

header("Location: http://localhost/public/imagination-vanilla");

