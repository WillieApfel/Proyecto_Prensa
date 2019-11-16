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

function add_to_roster(){
    global $connect;

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $number=$_POST['numero'];
    $posicion=$_POST['pos'];
    $p_sec=$_POST['pos_sec'];
    $feet=$_POST['h_feet'];
    $pulgadas=$_POST['h_inches'];
    $peso=$_POST['peso'];
    $b_day=$_POST['b_day'];
    $b_place=$_POST['b_place'];
    $bat=$_POST['bat'];
    $throw=$_POST['throw'];
    $org=$_POST['org'];
    $liga=$_POST['liga'];

    $insert = mysqli_query($connect,"INSERT INTO `roster` (`id`, `nombre`, `apellido`, `nro`, `posicion`, `pos_sec`, 
        `bat`, `throw`, `h_feet`, `h_inches`, `w_lbs`, `birthday`, `birthplace`, `org`, `liga`) VALUES (NULL, '$nombre', 
        '$apellido', '$number', '$posicion', '$p_sec', '$bat', '$throw', '$feet', '$pulgadas', '$peso', '$b_day', 
        '$b_place', '$org', '$liga')");

}

function select_juegos(){
    global $connect, $fecha, $row_temp;  
    $sql= mysqli_query($connect,"SELECT c.*, cm.nro_juego, el.abreviatura AS 'loc', ev.abreviatura AS 'vis' 
        FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id = cm.id INNER JOIN equipos el 
        ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id ORDER BY cm.nro_juego");
    while($row=mysqli_fetch_array($sql)){
        if($row['home_club']==1){
            $rival=$row['vis'];
        }else{
            $rival=['loc'];
        }
        echo '<option value="'.$row['fecha'].'">Juego #'.$row['nro_juego'].' vs '.$rival.'</option>';

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

function sql_dateformat($item){
    
    $new = explode('/',$item);
  
    return $new[2]."-".$new[1]."-".$new[0];
}

?>