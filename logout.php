<?php 

session_start();
$_SESSION['user'] = "";
session_destroy();
session_unset();
session_unset();

header("Location: login.php");

?>