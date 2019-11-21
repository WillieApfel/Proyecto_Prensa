<?php 
include 'connect.php';
$local=$_POST['local'];
$visitante=$_POST['visit'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$transmision=$_POST['transmision'];


mysqli_query($connect,"INSERT INTO `calendario_liga` (`id`, `fecha`, `hora`, `home_club`, `visitante`, `carreras_hc`, `carreras_v`, `temp`, `status`) VALUES (NULL, '$fecha', '$hora', '$local', '$visitante', '0', '0', '1', '1')");

header("location:partidoslvbp.php");
?>