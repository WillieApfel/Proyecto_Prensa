<?php
include 'connect.php';
$id = $_GET['id'];

echo "DELETE FROM `roster_week` WHERE `roster_week`.`id` = '$id'";

mysqli_query($connect,"DELETE FROM `roster_week` WHERE `roster_week`.`id` = '$id'");
header("location:roster_sem.php"); 

?>