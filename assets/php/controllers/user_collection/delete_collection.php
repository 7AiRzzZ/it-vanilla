<?php

require_once('../../middleware/connect.php');

$user_alias = $_POST['user-alias'];

$db_connect->query("DELETE FROM user_collection WHERE user_collection.user_alias = '$user_alias' ");

header("Location: http://localhost/public/imagination-vanilla");
