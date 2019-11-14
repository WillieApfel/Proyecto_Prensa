<?php

$connect = mysqli_connect("localhost","root","","prensa_magallanes");
mysqli_set_charset($connect, "utf8");
$fecha = $_GET['f'];
$fecha_unix = strtotime($fecha)-86400;
$new_fecha = date("Y-m-d",$fecha_unix);
$sql_temp=mysqli_query($connect,"SELECT * FROM temporada t WHERE @fecha:='$fecha' BETWEEN t.inicio AND t.fin");
$row_temp=mysqli_fetch_array($sql_temp);

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
    global $connect,$new_fecha,$fecha_unix,$fecha,$row_temp;
    $sql = mysqli_query($connect, "SELECT e.id, e.nombre FROM equipos e WHERE e.id BETWEEN 1 AND 8");
    $c=0;

    echo "<h3>Tabla:</h3>";

    echo    "<table>
                <tr>
                    <th>Equipo</th>
                    <th>JJ</th>
                    <th>JG</th>
                    <th>JP</th>
                    <th>AVG.</th>
                    <th>DIF.</th>
                </tr>";
    while ($row = mysqli_fetch_array($sql)) {
        
        
        $played=mysqli_query($connect,"SELECT COUNT('id') AS 'count' FROM calendario_liga c 
        WHERE (c.home_club=".$row['id']." OR c.visitante=".$row['id'].") AND (c.fecha 
        BETWEEN '2019-11-05' AND '".$new_fecha."')");

        $row_game=mysqli_fetch_array($played);

        $wins=mysqli_query($connect,"SELECT COUNT('id') AS 'count' FROM calendario_liga c 
        WHERE ((c.home_club=".$row['id']." AND c.carreras_hc > c.carreras_v) 
        OR (c.visitante=".$row['id']." AND c.carreras_v > c.carreras_hc)) AND (c.fecha 
        BETWEEN '2019-11-05' AND '".$new_fecha."')");

        $row_win=mysqli_fetch_array($wins);

        $loses=mysqli_query($connect,"SELECT COUNT('id') AS 'count' FROM calendario_liga c 
        WHERE ((c.home_club=".$row['id']." AND c.carreras_hc < c.carreras_v) 
        OR (c.visitante=".$row['id']." AND c.carreras_v < c.carreras_hc)) AND (c.fecha 
        BETWEEN '2019-11-05' AND '".$new_fecha."')");

        $row_lose=mysqli_fetch_array($loses);

        if(strtotime($row_temp['inicio']) > $fecha_unix or strtotime($fecha) > strtotime($row_temp['fin'])){

            $average=0;
        }else{
            $average=$row_win['count']/$row_game['count'];
        }
       
        $tabla[$c]=array($row['nombre'],$row_game['count'],
                    $row_win['count'],$row_lose['count'],get_average($average));
        $c=$c+1;
    }

    for($j=0;$j<count($tabla);$j++){

        $tabla[$j][5]=$tabla[$j][2]-$tabla[$j][3];
    }

    usort($tabla, 'sort_by_diference');

    #usort($tabla, 'sort_by_wins');
    
    $puesto=1;

    foreach($tabla as $equipo){
        #echo $equipo[0]." ".$equipo[1]." ".$equipo[2]."<br>";
        
        $diference_primero=$tabla[0][2]-$tabla[0][3];
        $diference_otro=$equipo[2]-$equipo[3];
        $equipo[6]=($diference_primero-$diference_otro)/2;



        if($equipo[6]==0){
            $equipo[6]="-";
        }
    
        
        echo "  <tr>
                    <td>".$equipo[0]."</td>
                    <td>".$equipo[1]."</td>
                    <td>".$equipo[2]."</td>
                    <td>".$equipo[3]."</td>
                    <td>".$equipo[4]."</td>
                    <td>".$equipo[6]."</td>
                </tr>";
        
    }
    echo "</table>";
}

function sort_by_wins($a,$b){
    return $b[2] - $a[2];
}
function sort_by_diference($a,$b){
    return $b[5] - $a[5];
}

function get_average($valor){
    if($valor==1){
        $string="1.000";
    }elseif($valor==0){
        $string=".000";
    }else{
        $previo=explode(".",strval(round($valor,3)));
        $string=str_pad(".".$previo[1], 4, "0", STR_PAD_RIGHT);
    }
    return $string;
}

function lastdaygame(){
    global $new_fecha, $connect, $row_temp;


    $sql = mysqli_query($connect,'SELECT c.*, el.nombre AS "local", ev.nombre AS "away", el.lugar FROM 
    calendario_liga c INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
    WHERE c.fecha="'.$new_fecha.'" AND c.temp ='.$row_temp['id']);
        
    
    
    echo "<h3>Resultados del día Anterior:</h3>";
    while($row = mysqli_fetch_array($sql)){
        $local = $row['local'];
        $visitante = $row['away'];   

        echo "<p>".$visitante." ".$row['carreras_v']." - ".$row['carreras_hc']." ".$local."</p>";            
    }
}

/*function defin_cmag(){
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
}*/


/*function week_roster_PROVI(){
    global $connect;
    
    $sql=mysqli_query($connect,"SELECT roster.id FROM roster");
    while($row=mysqli_fetch_array($sql)){

        mysqli_query($connect,"INSERT INTO `roster_week` (`id`, `jugador`, `semana_inicio`, `semana_fin`) VALUES (NULL, ".$row['id'].", '2019-11-04', '2019-11-10')");
        echo "listo ".$row['id']."<br>";
    }
    
}*/


function schedule_mag(){

    global $connect, $fecha, $new_fecha, $row_temp;


    #Query a partidos jugados hasta la fecha dada
    $sql_p=mysqli_query($connect,"SELECT c.*,cm.*,el.abreviatura AS 'abrl', ev.abreviatura AS 'abrv' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id=cm.id 
        INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
        WHERE `fecha` BETWEEN '".$row_temp['inicio']."' AND '".$new_fecha."' ORDER BY cm.nro_juego");

    
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
                <td>".custom_dateformat($row_p['fecha'],1)."</td>
                <td>".$res.$resultado.$con.$abrev."</td>
                <td>".$row_p['tiempo']."</td>
                <td>".$wins."G-".$lose."P"."</td>
                <td>".$row_p['asistencia']."</td>
                </tr>";
    }

    #Query a partidos no jugados a partir de la fecha dada
    
    $sql_nop=mysqli_query($connect,"SELECT c.*,cm.*,el.nombre AS 'local', ev.nombre AS 'visita' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id=cm.id 
        INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id 
        WHERE `fecha` BETWEEN '".$fecha."' AND '".$row_temp['fin']."' ORDER BY cm.nro_juego");

   
    while($row_nop=mysqli_fetch_array($sql_nop)){
        if($row_nop['home_club']==1){
            $con="Vs. ";
            $nom=$row_nop['visita'];
        }else{
            $con="@";
            $nom=$row_nop['local'];
        }
        echo"<tr>
                <td>".$row_nop['nro_juego']."</td>
                <td>".custom_dateformat($row_nop['fecha'],1)."</td>
                <td>".$con.$nom."</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>";

    }    
    echo"</table>";
}

function roster_week(){

    global $connect,$fecha;

    $posiciones=['P','C','INF','UT','OF'];

    echo"<table border=1>   
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Pos.</th>
                <th>B</th>
                <th>T</th>
                <th>H/W</th>
                <th>Birthday</th>
                <th>Birthplace</th>
                <th>Org.</th>
                <th>League</th>
            </tr>";

    foreach($posiciones as $posicion){
        if($posicion=='P'){

            $sql=mysqli_query($connect,"SELECT * FROM roster_week rw INNER JOIN roster r 
                ON rw.jugador=r.id WHERE (r.posicion='RHP' OR r.posicion='LHP') AND
                (@fecha:='$fecha' BETWEEN rw.semana_inicio AND rw.semana_fin) ORDER BY r.apellido");
        }elseif($posicion=='INF'){
            $sql=mysqli_query($connect,"SELECT * FROM roster_week rw INNER JOIN roster r
                ON rw.jugador=r.id WHERE (r.posicion='1B' OR r.posicion='2B' OR r.posicion='3B' 
                OR r.posicion='SS' OR r.posicion='INF') AND (@fecha:='$fecha' BETWEEN rw.semana_inicio 
                AND rw.semana_fin) ORDER BY r.apellido");
        }elseif($posicion=='OF'){
            $sql=mysqli_query($connect,"SELECT * FROM roster_week rw INNER JOIN roster r
                ON rw.jugador=r.id WHERE (r.posicion='LF' OR r.posicion='CF' OR r.posicion='RF' 
                OR r.posicion='OF') AND (@fecha:='$fecha' BETWEEN rw.semana_inicio 
                AND rw.semana_fin) ORDER BY r.apellido");
        }else{
            $sql=mysqli_query($connect,"SELECT * FROM roster_week rw INNER JOIN roster r
                ON rw.jugador=r.id WHERE r.posicion='".$posicion."' AND (@fecha:='$fecha' 
                BETWEEN rw.semana_inicio AND rw.semana_fin)ORDER BY r.apellido");
        }

        while($row=mysqli_fetch_array($sql)){
            if($row['pos_sec']==""){
                $posicion = $row['posicion'];
            }else{
                $posicion = $row['posicion']."/".$row['pos_sec'];
            }
            echo"<tr>
                    <td>".$row['nro']."</td>
                    <td>".$row['apellido'].", ".$row['nombre']."</td>
                    <td>".$posicion."</td>
                    <td>".$row['bat']."</td>
                    <td>".$row['throw']."</td>
                    <td>".$row['h_feet']."'".$row['h_inches'].'"/'.$row['w_lbs']."</td>
                    <td>".custom_dateformat($row['birthday'],2)."</td>
                    <td>".$row['birthplace']."</td>
                    <td>".$row['org']."</td>
                    <td>".$row['liga']."</td>
                </tr>";
    
        }   

    }
    echo"</table>";

}

function umpire(){

    global $connect, $fecha;
    $sql = mysqli_query($connect,"SELECT a.* FROM arbitraje a INNER JOIN calendario_liga c 
        ON a.id=c.id WHERE c.fecha='".$fecha."'");

    $row=mysqli_fetch_array($sql);
    echo'<p class="mayus">HP: '.$row['principal'].'</p>
        <p class="mayus">1B: '.$row['primera'].'</p>
        <p class="mayus">2B: '.$row['segunda'].'</p>
        <p class="mayus">3B: '.$row['tercera'].'</p>
        <p class="mayus">RV: '.$row['rv'].'</p>';


    
}

function membrete(){
    global $connect;
    $sql = mysqli_query($connect, "SELECT * FROM `trofeos`");
    $row=mysqli_fetch_array($sql);
    echo $row['lvbp']." títulos de la LVBP, ".$row['caribe']." Series del Caribe";


}


function custom_dateformat($item,$referencia){
    
    $new = explode('-',$item);
    if($referencia==1){
        $retorno=$new[2]."/".$new[1];
    }elseif($referencia==2){
        $retorno=$new[2]."/".$new[1]."/".$new[0];
    }
    return $retorno;
}

membrete();
gameday();
tabla();
lastdaygame();
umpire();
schedule_mag();
roster_week();
?>