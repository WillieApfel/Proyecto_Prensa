<?php
include 'connect.php';
$redaccion = utf8_decode($_POST["Editor1"]);
$abridores = $_POST["abridores"];
$juego = $_POST["juego"];
$duelo = utf8_decode($_POST["Editor2"]);
$principal = $_POST["principal"];
$primera = $_POST["primera"];
$segunda = $_POST["segunda"];
$tercera = $_POST["tercera"];
$reserva = $_POST["reserva"];
$sql=mysqli_query($connect, "SELECT * FROM arbitraje WHERE fecha ='$juego'");
$row=mysqli_fetch_assoc($sql);

if(is_null($row['id'])==true){
	mysqli_query($connect, "INSERT INTO `arbitraje` (`id`, `fecha`, `principal`, `primera`, `segunda`, `tercera`, `rv`) VALUES (NULL, '$juego', '$principal', '$primera', '$segunda', '$tercera', '$reserva')");

}

mysqli_query($connect, "INSERT INTO `redaccion` (`id`, `redaccion`, `abridores`, `duelo`, `fecha`) VALUES (NULL, '$redaccion', '$abridores', '$duelo', '$juego')");

header('location:..\..\..\genera_prueba.php?f='.$juego);
?>