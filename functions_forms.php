<?php
$connect = mysqli_connect("localhost","root","","prensa_magallanes");
mysqli_set_charset($connect, "utf8");

function roster_view(){
    global $connect;
    $posiciones=['P','C','INF','UT','OF'];

    foreach($posiciones as $posicion){
        if($posicion=='P'){

            $sql=mysqli_query($connect,"SELECT * FROM roster r WHERE (r.posicion='RHP' OR r.posicion='LHP') 
            ORDER BY r.apellido");
        }elseif($posicion=='INF'){
            $sql=mysqli_query($connect,"SELECT * FROM roster r WHERE (r.posicion='1B' OR r.posicion='2B' 
            OR r.posicion='3B' OR r.posicion='SS' OR r.posicion='INF') ORDER BY r.apellido");
        }elseif($posicion=='OF'){
            $sql=mysqli_query($connect,"SELECT * FROM roster r WHERE (r.posicion='LF' OR r.posicion='CF' 
            OR r.posicion='RF' OR r.posicion='OF') ORDER BY r.apellido");
        }else{
            $sql=mysqli_query($connect,"SELECT * FROM roster r WHERE r.posicion='".$posicion."' ORDER BY r.apellido");
        }

        while($row=mysqli_fetch_array($sql)){
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
    }
}

function select_juegos(){
    global $connect, $fecha, $row_temp;  
    $sql= mysqli_query($connect,"SELECT c.*, cm.nro_juego, el.abreviatura AS 'loc', ev.abreviatura AS 'vis' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id = cm.id INNER JOIN equipos el ON c.home_club=el.id 
        INNER JOIN equipos ev ON c.visitante=ev.id WHERE c.fecha NOT IN (SELECT redaccion.fecha FROM redaccion) 
        ORDER BY cm.nro_juego");

    while($row=mysqli_fetch_array($sql)){
        if($row['home_club']==1){
            $rival=$row['vis'];
        }else{
            $rival=['loc'];
        }
        echo '<option value="'.$row['fecha'].'">Juego #'.$row['nro_juego'].' vs '.$rival.'</option>';
    }
}

function show_lvbp($fecha){
    $sql= "SELECT c.carreras_hc, c.carreras_v, el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
    INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id";
    $resultado=mysqli_query($connect,$sql);
    while($mostrar=mysqli_fetch_array($resultado)) { 
        echo"
           <tr>
                <td>".$mostrar['local']."</td>
                <td>".$mostrar['carreras_hc']."</td>
                <td>".$mostrar['carreras_v']."</td>
                <td>".$mostrar['visit']."></td>
            </tr>";
    }
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

function calc_week(){
    global $connect;
    $sql_lastday=mysqli_query($connect,"SELECT MAX(r.semana_fin) AS 'lastday' FROM roster_week r");
    $row_lastday=mysqli_fetch_array($sql_lastday);
    $inicio=$row_lastday['lastday']+86400;
    $fin=$row_lastday['lastday']+(86400*7);
    return array(date("Y-m-d",$inicio),$inicio,date("Y-m-d",$fin),$fin);
}

function habilit_week(){
    global $connect;

    $week=calc_week();
    $centinela=time()+(86400*3);
    $sql=mysqli_fetch_array($connect,"SELECT rw.semana_inicio, rw.semana_fin FROM roster_week rw GROUP BY rw.semana_inicio");
    if($centinela>$week[1]){
        #echo '<option value="'.$row['fecha'].'">Juego #'.$row['nro_juego'].' vs '.$rival.'</option>';
    }
}

function select_lvbp_updates(){

    global $connect, $fecha, $row_temp;  
    $sql= mysqli_query($connect,"SELECT c.*, el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
    INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id GROUP BY c.fecha ORDER BY c.fecha");
    while($row=mysqli_fetch_array($sql)){

     echo '<option value="'.$row['fecha'].'">'.custom_dateformat($row['fecha'],2).'</option>';
    }






}
   
function show_games(){
    global $connect, $juegos;

    $sql= mysqli_query($connect,"SELECT c.*, el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
    INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id ORDER BY c.fecha");
    while($row=mysqli_fetch_array($sql)){


    $boton='<a href="edit.php?id='. $row['id'] .'"><button class="btn btn-light">editar</button></a>';
        
    echo "	<tr>
                <td>".$row['fecha']."</td>
                <td>".$row['visit']."</td>
                <td>".$row['carreras_v']."</td>
                <td>".$row['carreras_hc']."</td>
                <td>".$row['local']."</td>
                <td>".$boton."</td>
            </tr>";

    }
}


function lable_edit_juegos($obj){
    global $connect;
    $sql= mysqli_query($connect,"SELECT el.nombrec AS 'local', ev.nombrec AS 'visit' FROM calendario_liga c 
    INNER JOIN equipos el ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id WHERE c.id='".$obj."'");
    $row=mysqli_fetch_array($sql);

    return array($row['visit'],$row['local']);
}

function select_week(){
    global $connect;
    $sql = mysqli_query($connect, "SELECT rw.semana_inicio, rw.semana_fin FROM roster_week rw GROUP BY rw.semana_inicio");
    while ($row = mysqli_fetch_array($sql)){
        echo '<option value="'.$row['semana_inicio'].'">'.custom_dateformat($row['semana_inicio'], 2)." - ".custom_dateformat($row['semana_fin'], 2).'</option>';
    }
}

function show_week($fecha){
    global $connect;
    $sql = mysqli_query($connect, "SELECT rw.semana_inicio, rw.semana_fin FROM roster_week rw GROUP BY rw.semana_inicio");
    while ($row = mysqli_fetch_array($sql)){
        echo '<option value="'.$row['semana_inicio'].'">'.custom_dateformat($row['semana_inicio'], 2)." - ".custom_dateformat($row['semana_fin'], 2).'</option>';
    }
    while($row=mysqli_fetch_array($sql)) { 
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
}

function search_player() {
    global $connect;
    $sql = mysqli_query($connect, "SELECT * FROM roster r WHERE r.nombre LIKE '%".$_POST['search']."' AND r.apellido LIKE '%".$_POST['search']."'");
    echo '<tr>
            <td>Nombre y Apellido</td>
        </tr>';
    while ($row = mysqli_fetch_array($sql)) {
        echo '<tr>
            <td>'.$row['nombre']." ".$row['apellido'].'</td>
        </tr>';
    }
}
?>