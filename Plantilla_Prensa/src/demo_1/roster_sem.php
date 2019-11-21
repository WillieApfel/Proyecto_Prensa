<?php 
include '../../../functions_forms.php';
?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Roster Semanal</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 
<script src="main.js"></script>
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <form name="fsem">
                    <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary" onclick="moverIzquierda()"><i class="mdi mdi-chevron-left"></i></button>
                        <select name="semana" class="btn btn-secondary dropdown-toggle" type="button" onchange="select_rosterweek(this)">
                            <option value="1">- - Selecionar- -</option>
                            <?php select_week(); ?>
                        </select>
                        <button type="button" class="btn btn-secondary" onclick="moverDerecha()"><i class="mdi mdi-chevron-right"></i></button>
                    <script>
                        function moverIzquierda(){ 
                            var indice = document.fsem.semana.selectedIndex;
                            document.fsem.semana.options[indice - 1].selected = true;}

                        function moverDerecha(){ 
                            var indice = document.fsem.semana.selectedIndex;
                            document.fsem.semana.options[indice + 1].selected = true;}
                    </script>
                    </div>
                </form>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            </div>
                          <div class="col-sm-3">
                            <a href="#ventana0" data-toggle="modal"><button style="margin-left: 300px; position: absolute; background-color:#0000FF; border-color:#0000FF" data-toggle="modal" class="btn btn-success">Añadir</button></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <div>
                            <table id="datatables-example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0" style="margin-top: 40px">
                                <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombre</th>
                                        <th>Posición</th>
                                        <th>B/T</th>
                                        <th>H/W</th>   
                                        <th>Birthday</th>
                                        <th>Birthplace</th>
                                        <th>Organización</th>
                                        <th>Liga</th>
                                    </tr>
                                </thead>
                                <tbody id="roster_week">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ventana0">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Header del Modal-->
            <div class="modal-header">
                <h4 class="modal-title">Buscador</h4>
            </div>
            <!--Body del Modal con formulario-->
            <form action="" mehtod="POST" name="form1" class="form-inline">
                <input type="text" name="busqueda" id="pc" class="form-control" placeholder="Busqueda" onkeyup="loadB();" style="width: 60%;">
                <select name="filtrar" id="sc" style="width: 150px;" class="form-control">
	                            <option value="nombre"><span>nombre</span></option>
	                            <option value="apellido"><span>apellido</span></option>
	                          </select>
                <input style="margin-left: 70px; background-color:#0000FF; border-color:#0000FF" name="submit" type="submit" class="btn btn-success" aria-hidden="true" name="buscar" value="Buscar">
            </form>    
                
                <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                      <tbody id='prueba3'>                    
                        <?php
                            if (isset($_POST['buscar'])) {
                                $buscar = $_POST["palabra"];
                                $param = $_POST["filtrar"];
            
                                if($param==''){
                                $sql="SELECT * FROM `roster_equipo`";
                                }else{
                                $sql="SELECT * FROM `roster_equipo` WHERE  $param LIKE '%".$buscar."%'";
                                }
                            }else{
                                $sql="SELECT * FROM `roster_equipo`";
                            }

                            $result = mysqli_query($connect, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {

                                $modificar='<a href="agregar.php?id=' . $row['id'] . '"><input type="button" class="btn btn-round btn-warning" value="+"/></a>';



                            echo"   <tr>
                                        <td class='col-xs-2' id='acc'>".$row['nombre']."</td>
                                        <td class='col-xs-2' id='acc'>".$row['apellido']."</td>
                                        <td class='col-xs-2' id='acc'>".$modificar."</td> 

                                        </tr>";
                                }
                            } else {
                                echo "<td>0 results</td>";
                            }
        
                            

                        ?>




                        </tbody>
                        </table>
                        </div>
                        </div>
                    <!--Footer del modal-->
                    <f class="modal-footer">
                        
                      <button style="margin-left: 120px; background-color: red; border-color: red; color: white" type="reset" name="reset" data-dismiss="modal" class="btn btn-default}" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
               
           
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');
?>

<script>

function loadB(){
    var str=document.getElementById('pc').value;
    var str2=document.getElementById('sc').value;
    var xmlhttp;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    } else{// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("prueba3").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","tabla.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("q="+str+"&y="+str2);
    }
</script>
