<?php

require_once('../../middleware/connect.php');

$creation_name= $_POST['creation-name'];

$db_connect->query("DELETE FROM creation WHERE creation.name = '$creation_name' ");

header("Location: http://localhost/public/imagination-vanilla");


