<?php

$connect = mysqli_connect("localhost","root","","prensa_magallanes");

mysqli_set_charset($connect, "utf8");

$fecha = $_GET['f'];

function gameday(){

    global $connect,$fecha;
    $sql = mysqli_query($connect,'SELECT c.*, el.nombre AS "local", ev.nombre AS "away", el.lugar FROM 
    calendario_liga c INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
    WHERE c.fecha="'.$fecha.'"');
        
    
    
    echo "<h3>Juegos del Día:</h3>";
    while($row = mysqli_fetch_array($sql)){
        if ($row['home_club'] != 1 ){
            if($row['visitante'] != 1){
                $local = $row['local'];
                $visitante = $row['away'];        
                echo "<p>En ".$row['lugar']."<br>".$visitante." Vs ".$local."</p>";
    
            }
        }
    }
}

function tabla(){
    global $connect,$fecha;
    $sql = mysqli_query($connect, "SELECT e.id, e.nombre FROM equipos e WHERE e.id BETWEEN 1 AND 8");


    echo "<h3>Tabla:</h3>";

    echo    "<table>
                <tr>
                    <th>Equipo</th>
                    <th>JJ</th>
                    <th>JG</th>
                    <th>JP</th>
                </tr>";
    while ($row = mysqli_fetch_array($sql)) {
        
        $count_game = mysqli_query($connect, 'SELECT COUNT("id") AS "count" FROM calendario_liga c WHERE c.fecha 
        BETWEEN "2019-11-05" AND "'.$fecha.'" AND c.home_club='.$row['id'].' OR c.visitante='.$row['id']);
        $row_game = mysqli_fetch_array($count_game);
        $count_win = mysqli_query($connect,'SELECT COUNT(c.id) as "count" FROM calendario_liga c WHERE c.fecha 
        BETWEEN "2019-11-05" AND "'.$fecha.'" AND (c.home_club='.$row['id'].' AND c.carreras_hc > c.carreras_v) 
        OR (c.visitante='.$row['id'].' AND c.carreras_v > c.carreras_hc)');
        $row_win = mysqli_fetch_array($count_win);
        $count_lose = mysqli_query($connect,'SELECT COUNT(c.id) as "count" FROM calendario_liga c WHERE c.fecha 
        BETWEEN "2019-11-05" AND "'.$fecha.'" AND (c.home_club='.$row['id'].' AND c.carreras_hc > c.carreras_v) OR 
        (c.visitante='.$row['id'].' AND c.carreras_v > c.carreras_hc)');
        $row_lose = mysqli_fetch_array($count_lose);
        
        echo "  <tr>
                    <td>".$row['nombre']."</td>
                    <td>".$row_game['count']."</td>
                    <td>".$row_win['count']."</td>
                    <td>".$row_lose['count']."</td>
                </tr>";
    }
    echo "</table>";
}

function lastdaygame(){
    global $fecha, $connect;
    $fecha_unix = strtotime($fecha)-86400;

    #echo date("Y-m-d",1572912000);
    $new_fecha = date("Y-m-d",$fecha_unix);

    $sql = mysqli_query($connect,'SELECT c.*, el.nombre AS "local", ev.nombre AS "away", el.lugar FROM 
    calendario_liga c INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
    WHERE c.fecha="'.$new_fecha.'"');
        
    
    
    echo "<h3>Resultados del día Anterior:</h3>";
    while($row = mysqli_fetch_array($sql)){
        $local = $row['local'];
        $visitante = $row['away'];   

        echo "<p>".$visitante." ".$row['carreras_v']." - ".$row['carreras_hc']." ".$local."</p>";            
    }
}



gameday();
tabla();
lastdaygame();
?>