<?php 

require_once('../../middleware/connect.php');

$user_alias = $_POST['user-alias'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET email='$email', password='$password', alias='$alias' WHERE user.alias = '$user_alias'");

header("Location: http://localhost/public/imagination-vanilla");
