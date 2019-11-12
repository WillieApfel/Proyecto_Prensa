<?php
include "../connection.php";
$jugadores = "";
$sql = "SELECT * from jugador WHERE id_equipo='$_GET[ie]' AND estado=1";
$result = mysqli_query($conn, $sql);
if ($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$jugadores = $jugadores . "<tr><td>" . $row['id'] . "</td><td>" . $row['nombre'] . "</td><td>" . $row['apellido'] . "</td><td>" . $row['altura'] . "</td><td>" . $row['peso'] . "</td><td>" . $row['firma'] . "</td><td>" . $row['numero'] . "</td><td>" . $row['id_equipo'] . "</td><td>" . $row['posicion'] . "</td><td>" . $row['estado'] . "</td><td>" . $row['nivel'] . "</td><td>" . $row['ERA'] . "</td><td>" . $row['IL'] . "</td><td>" . $row['SO'] . "</td><td>" . $row['BB'] . "</td><td>" . $row['AVE'] . "</td><td>" . $row['VB'] . "</td><td>" . $row['C'] . "</td><td>" . $row['CI'] . "</td><td>" . $row['HR'] . "</td><td>" . $row['JG'] . "</td><td>" . $row['JP'] . "</td><td>" . $row['JS'] . "</td><td><a href='edit.php?id=" . $row['id'] . "'><button class='btn btn-light'>editar</button></a></td></tr>";
	}
}
echo $jugadores;
?>