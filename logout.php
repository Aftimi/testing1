
<?php

session_unset();
session_destroy();

$type = $_COOKIE['type'];

setcookie('user', '', time() - (60*60*24*2), "/");
setcookie('type', '', time() - (60*60*24*2), "/");

header('location: '.$type.'/pfe/login.php');

?>