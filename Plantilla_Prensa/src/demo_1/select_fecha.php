<?php
include 'connect.php';
include '..\..\..\functions_forms.php';
$fecha=$_GET['f'];

$sql= mysqli_query($connect,"SELECT c.*, el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id ORDER BY c.fecha");
while($row=mysqli_fetch_array($sql)){


$boton='<a href="edit.php?id='. $row['id'] .'"><button class="btn btn-light">editar</button></a>"';
	
echo "	<tr>
			<td>".$row['fecha']."</td>
			<td>".$row['local']."</td>
			<td>".$row['carreras_hc']."</td>
			<td>".$row['carreras_v']."</td>
			<td>".$row['visit']."</td>
			<td>".$boton."</td>
		</tr>";

#value="'.$row['fecha'].'">'.custom_dateformat($row['fecha'],2).'</option>';
}



/*$sql = "SELECT * from jugador WHERE id_equipo='$_GET[ie]' AND estado=1";
$result = mysqli_query($conn, $sql);
if ($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo "
		
		";
		$jugadores = $jugadores . "<tr><td>" . $row['id'] . "</td><td>" . $row['nombre'] . "</td><td>" . $row['apellido'] . "</td><td>" . $row['altura'] . "</td><td>" . $row['peso'] . "</td><td>" . $row['firma'] . "</td><td>" . $row['numero'] . "</td><td>" . $row['id_equipo'] . "</td><td>" . $row['posicion'] . "</td><td>" . $row['estado'] . "</td><td>" . $row['nivel'] . "</td><td>" . $row['ERA'] . "</td><td>" . $row['IL'] . "</td><td>" . $row['SO'] . "</td><td>" . $row['BB'] . "</td><td>" . $row['AVE'] . "</td><td>" . $row['VB'] . "</td><td>" . $row['C'] . "</td><td>" . $row['CI'] . "</td><td>" . $row['HR'] . "</td><td>" . $row['JG'] . "</td><td>" . $row['JP'] . "</td><td>" . $row['JS'] . "</td><td><a href='edit.php?id=" . $row['id'] . "'><button class='btn btn-light'>editar</button></a></td></tr>";
	}
}
*/
?>