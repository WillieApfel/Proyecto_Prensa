 
 <?php

session_start();
$session_id = session_id();
$duration =900;
include"../../../connect.php";

$username=$_POST['username'];
$password=$_POST['password'];


if($username=='' or $password=='') {

 header("location:../login.php?status=error&msg=Nombre de usuario o contraseña incorrectos");

}else {

	$result = mysqli_query($connect,"SELECT * FROM usuarios where username='$username'");

 	while($row = mysqli_fetch_array($result)) {
	echo$username_database=$row["username"];
  echo$password_database=$row["password"];
    $nombre=$row["nombre"];

	}
	
	if($username == $username_database) {
  		if($password == $password_database) {
    		$_SESSION['currentuserx']=1;
    		$_SESSION['name']=$username_database ;
 			$_SESSION['nombre']=$nombre ;
			$_SESSION['sid']=$session_id;
    		$ip = $_SERVER['REMOTE_ADDR'];
    		$_SESSION['ipa'] = $ip;
    		$_SESSION['game_date'] = '0000-00-00';
    		$_SESSION['start']= time();
  			$_SESSION['duration']= $duration;
   			header("location:../../../inicio.php");
   		}else{

  			header("location:../login.php?status=error&msg=Nombre de usuario o contraseña incorrectos");
  		}
	}else{
  		// header("location:index.php");
  		header("location:../login.php?status=error&msg=Nombre de usuario o contraseña incorrectos"); 
	}
}

?>

