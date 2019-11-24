<?php
include 'connect.php';
$id=$_GET['id'];
$fecha=$_GET['f_ini'];
$semana=explode("a",$fecha);
echo $semana[1]." ".$semana[0];
mysqli_query($connect,"INSERT INTO `prensa_magallanes`.`roster_week` (`id`, `jugador`, `semana_inicio`, `semana_fin`) VALUES (NULL, '$id', '".$semana['0']."', '".$semana['1']."');");
header('location:roster_sem.php');


?>