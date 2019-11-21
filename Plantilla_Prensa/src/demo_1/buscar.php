<?php
include 'connect.php';
echo $_GET['busqueda'];
$sql = mysqli_query($connect, 'SELECT * FROM roster r WHERE r.nombre LIKE "%'.$_GET['busqueda'].'%" AND r.apellido LIKE "%'.$_GET['busqueda'].'%"');
    echo '<tr>
            <td>Nombre y Apellido</td>
        </tr>';
    while ($row = mysqli_fetch_array($sql)) {
        echo '<tr>
            <td>'.$row['nombre']." ".$row['apellido'].'</td>
        </tr>';
    }
?>