<?php
include 'connect.php';
$carreras_hc=$_POST['carreras_hc'];
$carreras_v=$_POST['carreras_v'];
$id=$_POST['id'];
mysqli_query($connect, "UPDATE `calendario_liga` SET `carreras_hc` = '$carreras_hc', `carreras_v` = '$carreras_v' WHERE `calendario_liga`.`id` = $id");
header("location:partidoslvbp.php")
#echo "UPDATE `calendario_liga` SET `carreras_hc` = '$carreras_hc', `carreras_v` = '$carreras_v' WHERE `calendario_liga`.`id` = $id";
?>