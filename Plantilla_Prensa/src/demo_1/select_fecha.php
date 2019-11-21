<?php 
include 'connect.php';

mysqli_set_charset($connect, "utf8");
$calendario_liga = "";
$sql= mysqli_query($connect,"SELECT c.*, el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id WHERE c.fecha='$_GET[f]' ORDER BY c.fecha");

if ($sql){
while($row=mysqli_fetch_array($sql)){

	if($row['carreras_hc']==0 and $row['carreras_v']==0){
		$resultado="-";
	}else{
		$resultado=$row['carreras_v']." - ".$row['carreras_hc'];
	}
$boton='<a href="edit.php?id='.$row['id'].'"><button class="btn btn-light">editar</button></a>';	
echo"<tr>
		
			<td>".$row['fecha']."</td>
			<td>".$row['visit']."</td>
			<td>".$resultado."</td>
			<td>".$row['local']."</td>
			<td>".$boton."</td>
		</tr>";

	 }
}

?>