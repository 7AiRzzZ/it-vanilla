<?php

require_once('../../middleware/connect.php');

$categories = $_POST['categories'];
$url = $_POST['url'];
$description = $_POST['description'];
$name = $_POST['name'];

$db_connect->query("INSERT INTO creation(id, url,name, description) VALUES (NULL,'$url','$name','$description')");

header("Location: http://localhost/public/imagination-vanilla");


