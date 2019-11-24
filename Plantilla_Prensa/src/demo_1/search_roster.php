<?php
include 'connect.php';


#if(isset($_POST['search'])){
    if($_POST['search']!=''){
        $sql="SELECT * FROM `roster_equipo` WHERE nombre LIKE '%".$buscar."%' OR apellido LIKE '%".$buscar."%'";
        echo" <thead>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pos</th>
                <th>Nacimiento</th>
                <th>Accion</th>
            </tr>
        </thead>
      <tbody id='prueba3'>";
        while($row=mysqli_fetch_assoc($sql)){
            echo"<tr>
                    <td class='col-xs-2' id='acc'>".utf8_decode($row['nombre']).utf8_decode($row['apellido'])."</td>
                    <td class='col-xs-2' id='acc'>".$row['posicion']."</td>
                    <td class='col-xs-2' id='acc'>".$row['birthday']."</td> 
                    <td class='col-xs-2' id='acc'>".$row['w_lbs']."</td> 
                </tr>";
        }
        echo"</tbody>";
    }
#}


?>