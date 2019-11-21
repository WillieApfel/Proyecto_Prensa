<?php include '../../../functions_forms.php';

?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Roster</h4>
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
                                <tbody id="jugadores">
                                <?php roster_view() ?>
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Nuevo Jugador</h4>
            </div>
            <!--Body del Modal con formulario-->
            <form method="POST" action="insert.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="numero">Número:</label>
                                <input type="number" name="numero" id="numero" class="form-control" placeholder="Numero">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombre">Altura:</label>
                                <select class="form-control" name="h_feet" id="pies">
                                    <option value="5">5'</option>
                                    <option value="6">6'</option>
                                    <option value="7">7'</option>
                                </select>
                                <select class="form-control" name="h_inches" id="pulgadas">
                                    <option value="0">0''</option>
                                    <option value="1">1''</option>
                                    <option value="2">2''</option>
                                    <option value="3">3''</option>
                                    <option value="4">4''</option>
                                    <option value="5">5''</option>
                                    <option value="6">6''</option>
                                    <option value="7'">7''</option>
                                    <option value="8">8''</option>
                                    <option value="9">9''</option>
                                    <option value="10">10''</option>
                                    <option value="11">11''</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="peso">Peso(lbs):</label>
                                <input type="number" name="peso" id="peso" class="form-control" placeholder="Peso" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="b_day">Día de nacimiento:</label>
                                <input type="date" name="b_day" id="firma" class="form-control">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-4">
                            <div class="form-group">
                                <label for="b_place">Lugar de nacimiento:</label>
                                <input type="text" name="b_place" id="apellido" class="form-control" placeholder="Ciudad, País" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pos">Posicion</label>
                                <select name="pos" id="posicion" class="form-control" required>
                                    <option value="">--Seleccionar--</option>
                                    <option value="RHP">Pitcher Derecho</option>
                                    <option value="LHP">Pitcher Zurdo</option>
                                    <option value="C">Catcher</option>
                                    <option value="1B">Primera Base</option>
                                    <option value="2B">Segunda Base</option>
                                    <option value="3B">Tercera Base</option>
                                    <option value="SS">Short Stop</option>
                                    <option value="IF">Infielder</option>
                                    <option value="LF">Left Field</option>
                                    <option value="CF">Center Field</option>
                                    <option value="RF">Right Field</option>
                                    <option value="OF">Outfielder</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pos_sec">Posición Sec</label>
                                <select name="pos_sec" id="nivel" class="form-control">
                                    <option value="">--Seleccionar--</option>
                                    <option value="RHP">Pitcher Derecho</option>
                                    <option value="LHP">Pitcher Zurdo</option>
                                    <option value="C">Catcher</option>
                                    <option value="1B">Primera Base</option>
                                    <option value="2B">Segunda Base</option>
                                    <option value="3B">Tercera Base</option>
                                    <option value="SS">Short Stop</option>
                                    <option value="IF">Infielder</option>
                                    <option value="LF">Left Field</option>
                                    <option value="CF">Center Field</option>
                                    <option value="RF">Right Field</option>
                                    <option value="OF">Outfielder</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label for="bat">Bat</label>
                                <select name="bat" id="posicion" class="form-control" required>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label for="throw">Throw</label>
                                <select name="throw" id="posicion" class="form-control" required>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>
                    
                     <script>
                        function comprobar(){
                        
                            if (document.getElementById("chec").checked == true){
                                document.getElementById('desbloq').readOnly = false;
                                document.getElementById('desbloq1').readOnly = false;
                            }else{ 
                                document.getElementById('desbloq').readOnly = true;
                                document.getElementById('desbloq1').readOnly = true;
                            
                            }
                        }
                                    
                         </script>
                    
                     <label for="chec">¿Pertenece a otra Organización?<input name="chec" id="chec" onchange="comprobar();" style="form-control; position: absolute; margin-left: 10px;"type="checkbox"></label>  
                    <div class="row">
                        <div class="col-sm-4">


                           <div class="row">
                               
                        <div class="col-sm-4">
                             <div class="form-group">
                                
                                <label for="chec">Organización</label> 
                                 
                                <input style="width: 140px " type="text" name="org" class="form-control" placeholder="Equipo" id="desbloq" readonly> 
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <label for="chec">Liga</label>
                                 <br>
                                <input style="width: 140px "type="text" name="liga"  class="form-control" placeholder="Liga de Beisbol" id="desbloq1" readonly> 
                            </div>
                        </div>
                <!--Footer del modal-->
                <div class="modal-footer">
                    
                    <input style="margin-left: 70px; background-color:#0000FF; border-color:#0000FF" href="insert.php.php" value="Agregar" name="submit" type="submit" class="btn btn-success" aria-hidden="true">
                    
                  <button style="margin-left: 120px; background-color: red; border-color: red; color: white" type="reset" name="reset" data-dismiss="modal" class="btn btn-default}" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>

                         </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');
?>


   