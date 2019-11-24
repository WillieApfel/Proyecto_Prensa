<?php
session_start();
//include"../header.php";

	$_SESSION['currentuserx'];
    $_SESSION['name'];
    $_SESSION['sid'];
   	$_SESSION['ipa'] ;
    $_SESSION['game_date'] ;
      
session_destroy();
header("location: pages/Login/login.php");


?>
