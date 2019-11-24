<?php session_start();

   
   
//if(!isset($_SESSION['currentuserx']) && !isset($_SESSION['namex']))
if(!$_SESSION['currentuserx'])
{ 


//$flag = 1;
header("Location: pages/Login/login.php?status=error&msg=Usted debe iniciar sesion");


}

$duration = $_SESSION['duration'];
$start = $_SESSION['start'];
if ((time() - $start ) > $duration){



//$usuario=$_SESSION['namex'];
//$usuario=convertidor::invertir($usuario);
	//$con=mysql_connect($host,$user,$pw) or die("Problema al conectar el host");
       //   		mysql_select_db($bd,$con) or die ("problemas al conectar a la BD");
          		//$sql="UPDATE localidad SET Status_Localidad='D', User='Nadie' WHERE User='$usuario'";
          		//mysql_query($sql2);
		

session_destroy();

header("location: pages/Login/login.php?status=error&msg=La sesion ha expirado por tiempo de inactividad");

echo"<script>var URLactual = window.location;
	ventana = window.open(URLactual,'nuevaVentana','width=300, height=400,location=no,menubar=no,directories=no,resizable=no ');
	ventana.close(); </script>";

}
//else {

$_SESSION["start"] = time();


?>