<?php

$databaseHost = 'localhost';
$databaseName = 'sgcc';
$databaseUsername = 'root';
$databasePassword = '';

$conexion = new mysqli();
$conexion->connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
