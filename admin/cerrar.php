<?php session_start();

session_destroy();
$_SESSION = array();

header('Location: ../'); //Mandamos hacia atras
die();

?>
