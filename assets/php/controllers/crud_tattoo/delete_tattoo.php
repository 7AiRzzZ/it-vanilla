<?php

require_once('../../middleware/connect.php');

$tattoo_name = $_POST['tattoo-name'];

$db_connect->query("DELETE FROM tattoo WHERE tattoo.name = '$tattoo_name'");

header("Location: http://localhost/public/imagination-vanilla");

