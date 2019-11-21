<?php
include 'connect.php';
$carreras_hc=$_POST['carreras_hc'];
$carreras_v=$_POST['carreras_v'];
$asistencia=$_POST['asistencia'];
$tiempo=$_POST['tiempo'];
$id=$_POST['id'];
mysqli_query($connect, "UPDATE `calendario_liga` SET `carreras_hc` = '$carreras_hc', `carreras_v` = '$carreras_v' WHERE `calendario_liga`.`id` = $id");
mysqli_query ($connect, "UPDATE `prensa_magallanes`.`calendario_mag` SET `tiempo` = '$tiempo',`asistencia` = '$asistencia' WHERE `calendario_mag`.`id` =$id;");
header("location:partidoslvbp.php")
#echo "UPDATE `prensa_magallanes`.`calendario_mag` SET `tiempo` = '$tiempo',`asistencia` = '$asistencia' WHERE `calendario_mag`.`id` =$id;";
#echo "UPDATE `calendario_liga` SET `carreras_hc` = '$carreras_hc', `carreras_v` = '$carreras_v' WHERE `calendario_liga`.`id` = $id";
?>