<?php


require_once('../../middleware/connect.php');

$user_alias = $_POST['user_alias'];
$tattoo_name = $_POST['tattoo_name'];
$creation_name = $_POST['creation_name'];

$db_connect->query("INSERT INTO user_collection (id, user_alias, tattoo_name, creation_name )
                    VALUES (NULL, '$user_alias', '$tattoo_name' , '$creation_name')
                ");
 
 header("Location: http://localhost/public/imagination-vanilla");

