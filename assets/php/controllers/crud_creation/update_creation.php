<?php

require_once('../../middleware/connect.php');

$creation_name = $_POST['creation-name'];
$url = $_POST['url'];
$description = $_POST['description'];
$name = $_POST['name'];




$db_connect->query("UPDATE creation SET url = '$url' , name = '$name', description = '$description' WHERE creation.name = '$creation_name' ");


header("Location: http://localhost/public/imagination-vanilla");


