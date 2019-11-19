<?php
include 'connect.php';
include '..\..\..\functions_forms.php';
    $sql = mysqli_query($connect, "SELECT * FROM roster_week rw INNER JOIN roster r ON rw.jugador=r.id 
        WHERE rw.semana_inicio='".$_GET['f']."'");
    while($row=mysqli_fetch_array($sql)) { 
        if($row['pos_sec']==""){
            $posicion = $row['posicion'];
        }else{
            $posicion = $row['posicion']."/".$row['pos_sec'];
        }
        echo"<tr>
                <td>".$row['nro']."</td>
                <td>".$row['nombre']." ".$row['apellido']."</td>
                <td>".$posicion."</td>
                <td>".$row['bat']."/".$row['throw']."</td>
                <td>".$row['h_feet']."'".$row['h_inches'].'"/'.$row['w_lbs']."</td>
                <td>".custom_dateformat($row['birthday'],2)."</td>
                <td>".$row['birthplace']."</td>
                <td>".$row['org']."</td>
                <td>".$row['liga']."</td>
            </tr>";
    }
?>