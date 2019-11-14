<?php include('header.php');
?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Roster</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">Estadisticas</a></li>
                      <li><a href="#">Juegos</a></li>
                      <li><a href="#">Asistencia de los juegos</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                      <li><a href="#">Opciones</a></li>
                      <li><a href="#">Analisis</a></li>
                      <li><a href="#">Vista</a></li>
                    </ul>
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
<<<<<<< HEAD
                            <h3>Roster</h3>
                        </div>
                        <div class="col-sm-3">
=======
                            </div>
                          <div class="col-sm-3">
>>>>>>> 0dcce1b8515d8c720a32c3bfc71fd504e7dee939
                            <a href="#ventana0" data-toggle="modal"><button style="margin-left: 300px; position: absolute; background-color:#0000FF; border-color:#0000FF" data-toggle="modal" class="btn btn-success">Nuevo</button></a>
                            <button style="margin-left: 400px; position: absolute; background-color:#0000FF; border-color:#0000FF" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <div>
                            <table id="datatables-example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0" style="margin-top: 40px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Nro</th>
                                        <th>Posición</th>
                                        <th>Posición Sec</th>
                                         <th>Bateo</th>
                                        <th>Throw</th>
                                        <th>Altura</th>
                                        <th>Peso</th>    
                                        <th>Día de nacimiento</th>
                                        <th>Lugar de nacimiento</th>
                                        <th>Org</th>
                                        <th>Liga</th>
                                    </tr>
                                </thead>
                                <tbody id="jugadores">
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
                                <label for="numero">Numero:</label>
                                <input type="number" name="numero" id="numero" class="form-control" placeholder="Numero">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombre">Altura:</label>
                                <select class="form-control" name="pies" id="pies">
                                    <option value="5\'">5'</option>
                                    <option value="6\'">6'</option>
                                    <option value="7\'">7'</option>
                                </select>
                                <select class="form-control" name="pulgadas" id="pulgadas">
                                    <option value='1"'>1''</option>
                                    <option value="1\'\'">1''</option>
                                    <option value="2\'\'">2''</option>
                                    <option value="3\'\'">3''</option>
                                    <option value="4\'\'">4''</option>
                                    <option value="5\'\'">5''</option>
                                    <option value="6\'\'">6''</option>
                                    <option value="7\'\'">7''</option>
                                    <option value="8\'\'">8''</option>
                                    <option value="9\'\'">9''</option>
                                    <option value="10\'\'">10''</option>
                                    <option value="11\'\'">11''</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apellido">Peso(lbs):</label>
                                <input type="number" name="peso" id="peso" class="form-control" placeholder="Peso" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="date">Día de nacimiento:</label>
                                <input type="date" name="firma" id="firma" class="form-control">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apellido">Lugar de nacimiento:</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ciudad y Pais" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Posicion">Posicion</label>
                                <select name="posicion" id="posicion" class="form-control" required>
                                    <option value="P">Pitcher</option>
                                    <option value="IF">Infielder</option>
                                    <option value="OF">Outfielder</option>
                                    <option value="C">Catcher</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Posicion">Posición Sec</label>
                                <select name="nivel" id="nivel" class="form-control" required>
                                    <option value="P2">Pitcher</option>
                                    <option value="IF2">Infielder</option>
                                    <option value="OF2">Outfielder</option>
                                     <option value="C2">Catcher</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label for="Posicion">Bateo</label>
                                <select name="posicion" id="posicion" class="form-control" required>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>
                     <div class="col-md-6">
                            <div class="form-group">
                                <label for="Posicion">Thorw</label>
                                <select name="posicion" id="posicion" class="form-control" required>
                                    <option value="R">R</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-4">
                           <div class="row">
                        <div class="col-sm-4">
                             <div class="form-group">
                                <label for="nombre">Organización:</label>
                                <input type="text" name="org" id="org" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <label for="nombre">Liga:</label>
                                 <br>
                                <input style="width: 140px "type="text" name="lig" id="lig" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>
                <!--Footer del modal-->
                <div class="modal-footer">
                     <button style="margin-left: 400px; position: absolute; background-color:#0000FF; border-color:#0000FF" name="submit" type="submit" class="btn btn-success" aria-hidden="true"><span class="glyphicon glyphicon-ok "><span>Agregar</button>
                    <button type="reset" name="reset" data-dismiss="modal" class="btn btn-default" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                         </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');
?>


   
