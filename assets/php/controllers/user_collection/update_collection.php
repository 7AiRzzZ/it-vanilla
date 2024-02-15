<?php

require_once('../../middleware/connect.php');

$user_alias = $_POST['user_alias'];
$tattoo_name = $_POST['tattoo_name'];
$creation_name = $_POST['creation_name'];




$db_connect->query("UPDATE user_collection SET user_alias = '$user_alias' , tattoo_name= '$tattoo_name' , creation_name = '$creation_name' WHERE user_collection.user_alias = '$user_alias' ");


header("Location: http://localhost/public/imagination-vanilla");