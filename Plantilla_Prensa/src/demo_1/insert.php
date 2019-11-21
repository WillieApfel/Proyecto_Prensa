<?php
include 'connect.php';

 

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$number=$_POST['numero'];
$posicion=$_POST['pos'];
$p_sec=$_POST['pos_sec'];
$feet=$_POST['h_feet'];
$pulgadas=$_POST['h_inches'];
$peso=$_POST['peso'];
$b_day=$_POST['b_day'];
$b_place=$_POST['b_place'];
$bat=$_POST['bat'];
$throw=$_POST['throw'];
if($_POST['org']==''){
    $org='-';
}else{
    $org=$_POST['org'];
}
if($_POST['liga']==''){
    $liga='-';
}else{
    $liga=$_POST['liga'];
}

echo "INSERT INTO `roster` (`id`, `nombre`, `apellido`, `nro`, `posicion`, `pos_sec`, 
    `bat`, `throw`, `h_feet`, `h_inches`, `w_lbs`, `birthday`, `birthplace`, `org`, `liga`) VALUES (NULL, '$nombre', 
    '$apellido', '$number', '$posicion', '$p_sec', '$bat', '$throw', '$feet', '$pulgadas', '$peso', '$b_day', 
    '$b_place', '$org', '$liga')";

mysqli_query($connect, "INSERT INTO `roster` (`id`, `nombre`, `apellido`, `nro`, `posicion`, `pos_sec`, `bat`, `throw`, `h_feet`, `h_inches`, `w_lbs`, `birthday`, `birthplace`, `org`, `liga`) VALUES (NULL, 'Willie', 'sdfsd', '46', 'LHP', '', 'R', 'R', '5', '0', '180', '1999-01-26', 'Valencia', '-', '-')");
header("location:roster.php")
// header('location:roster.php');
?>