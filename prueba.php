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

function defin_cmag(){
    global $connect;
    for($i=5;$i<42;$i++){
        $prueba="SELECT * FROM calendario_liga c WHERE c.id=".$i;
        $sql=mysqli_query($connect,"SELECT * FROM calendario_liga c WHERE c.id=".$i);
        print($prueba."<br>");
        $row=mysqli_fetch_array($sql);
        $local=$row['home_club'];
        $visitante=$row['visitante'];
        print($local." ".$visitante."<br>");
        if($local==1){
            $tipo="L";
         
        }else {
            $tipo="V";
            
        }

        $probe="INSERT INTO `calendario_mag` (`id`, `nro_juego`, `tipo_juego`, `tiempo`, `asistencia`) VALUES ('".$i."', '".$i."', '".$tipo."', '', '0')"."<br>";
        print($tipo."<br>".$probe);
        $insert=mysqli_query($connect,"INSERT INTO `calendario_mag` (`id`, `nro_juego`, `tipo_juego`, `tiempo`, `asistencia`) VALUES ('".$i."', '".$i."', '".$tipo."', '', '0')");
    }
}


function week_roster_PROVI(){
    global $connect;
    
    $sql=mysqli_query($connect,"SELECT roster_equipo.id FROM roster_equipo");
    while($row=mysqli_fetch_array($sql)){

        $insert=mysqli_query($connect,"INSERT INTO `roster_week` (`id`, `jugador`, `semana_inicio`, `semana_fin`) VALUES (NULL, '".$row['id']."', '2019-11-11', '2019-11-17')");
    }
    
}


function schedule_mag(){

    global $connect, $fecha;
    #Query a partidos jugados hasta la fecha dada
    $sql_p=mysqli_query($connect,"SELECT c.*,cm.*,el.abreviatura AS 'abrl', ev.abreviatura AS 'abrv' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id=cm.id 
        INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
        WHERE `fecha` BETWEEN '2019-11-05' AND '".$fecha."' ORDER BY cm.nro_juego");

    
    echo"<table border=1>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Resultados</th>
                <th>Tiempo</th>
                <th>Record</th>
                <th>Asistencia</th>
            </tr>";
    $played=0;
    $wins=0;
    $lose=0;
    while($row_p=mysqli_fetch_array($sql_p)){
        if($row_p['home_club']==1 and $row_p['carreras_hc']>$row_p['carreras_v']){
            $res="G ";
            $con="Vs. ";
            $resultado=$row_p['carreras_hc']."-".$row_p['carreras_v']." ";
            $abrev=$row_p['abrv'];
            $wins=$wins+1;
        }elseif($row_p['home_club']==1 and $row_p['carreras_v']>$row_p['carreras_hc']){
            $res="P ";
            $con="Vs. ";
            $resultado=$row_p['carreras_hc']."-".$row_p['carreras_v']." ";
            $abrev=$row_p['abrv'];
            $lose=$lose+1;
        }elseif($row_p['visitante']==1 and $row_p['carreras_v']>$row_p['carreras_hc']){
            $res="G ";
            $con="@";
            $resultado=$row_p['carreras_v']."-".$row_p['carreras_hc']." ";
            $abrev=$row_p['abrl'];
            $wins=$wins+1;
        }else{
            $res="P ";
            $con="@";
            $resultado=$row_p['carreras_v']."-".$row_p['carreras_hc']." ";
            $abrev=$row_p['abrl'];
            $lose=$lose+1;
        }
        $played=$played+1;
        echo"<tr>
                <td>".$row_p['nro_juego']."</td>
                <td>".custom_dateformat($row_p['fecha'])."</td>
                <td>".$res.$resultado.$con.$abrev."</td>
                <td>".$row_p['tiempo']."</td>
                <td>".$wins."G-".$lose."P"."</td>
                <td>".$row_p['asistencia']."</td>
                </tr>";
    }

    #Query a partidos no jugados a partir de la fecha dada
    $fecha_unix = strtotime($fecha)+86400;
    $new_fecha = date("Y-m-d",$fecha_unix);
    $sql_nop=mysqli_query($connect,"SELECT c.*,cm.*,el.nombre AS 'local', ev.nombre AS 'visita' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id=cm.id 
        INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
        WHERE `fecha` BETWEEN '".$new_fecha."' AND '2019-12-29' ORDER BY cm.nro_juego");

   
    while($row_nop=mysqli_fetch_array($sql_nop)){
        if($row_p['home_club']==1){
            $con="Vs. ";
            $nom=$row_nop['visita'];
        }else{
            $con="@";
            $nom=$row_nop['local'];
        }
        echo"<tr>
                <td>".$row_nop['nro_juego']."</td>
                <td>".custom_dateformat($row_nop['fecha'])."</td>
                <td>".$con.$nom."</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";

    }    
    echo"</table>";

}

function custom_dateformat($item){
    $new = explode('-',$item);
    return $new[2]."/".$new[1];
}

gameday();
tabla();
lastdaygame();
schedule_mag();
?>