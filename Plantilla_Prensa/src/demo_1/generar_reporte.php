<?php
include 'connect.php';
$redaccion = $_POST["redaccion"];
$abridores = $_POST["abridores"];
$juego = $_POST["juego"];
mysqli_query($connect, "INSERT INTO `redaccion` (`id`, `redaccion`, `abridores`, `fecha`) 
VALUES (NULL, '".$redaccion."', '".$abridores."', '".$juego."')");

header('location:..\..\..\genera_prueba.php?f='.$juego);
?>