<?php
include 'connect.php';
$redaccion = $_POST["redaccion"];
$abridores = $_POST["abridores"];
$juego = $_POST["juego"];
$duelo = $_POST["duelo_abridores"];
mysqli_query($connect, "INSERT INTO `redaccion` (`id`, `redaccion`, `abridores`, `duelo`, `fecha`) 
VALUES (NULL, '".$redaccion."', '".$abridores."','".$duelo."', '".$juego."')");

header('location:..\..\..\genera_prueba.php?f='.$juego);
?>