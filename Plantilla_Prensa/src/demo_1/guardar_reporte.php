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

mysqli_query($connect, "UPDATE `prensa_magallanes`.`arbitraje` SET `principal` = '".$principal."',
`primera` = '".$primera."',
`segunda` = '".$segunda."',
`tercera` = '".$tercera."',
`rv` = '".$reserva."' WHERE `arbitraje`.fecha = '".$juego."'");

#mysqli_query($connect, "INSERT INTO `redaccion` (`id`, `redaccion`, `abridores`, `duelo`, `fecha`) VALUES (NULL, '$redaccion', '$abridores', '$duelo', '$juego')");
mysqli_query($connect, "UPDATE `prensa_magallanes`.`redaccion` SET `redaccion` = '$redaccion',
`abridores` = '$abridores',
`duelo` = '$duelo' WHERE `redaccion`.`fecha`='$juego'");
header('location:edit_reporte.php?f='.$juego);

?>
