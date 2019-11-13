<?php include('header.php');
?>
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
                            <h3>Roster</h3>
                        </div>
                        <div class="col-sm-3">
                            <a href="#ventana0" data-toggle="modal"><button style="margin-left: 430px;" data-toggle="modal" class="btn btn-success">Nuevo</button></a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container">
                        <div>
                            <table id="datatables-example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
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
                                <input type="date" name="firma" id="firma" class="form-control" placeholder="Año de Firma">
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-4">
                            <div class="form-group">
                                <label for="apellido">Lugar de nacimiento:</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
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
                            <div class="form-group">
                                <label for="equipos">Org:</label>
                                <select name="id_equipo" id="id_equipo" required>
                                    <?php
									$sql = "SELECT * FROM equipo";
									$result = mysqli_query($conn, $sql);
									if ($result) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value="' . $row[id] . '">' . $row[nombre] . '</option>';
										}
									}
									?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                <label for="equipos">Liga:</label>
                                <select name="id_equipo" id="id_equipo" required>
                                    <?php
									$sql = "SELECT * FROM equipo";
									$result = mysqli_query($conn, $sql);
									if ($result) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo '<option value="' . $row[id] . '">' . $row[nombre] . '</option>';
										}
									}
									?>
                                </select>
                            </div>
                        </div>
                <!--Footer del modal-->
                <div class="modal-footer">
                    <button name="submit" type="submit" class="btn btn-success" aria-hidden="true"><span class="glyphicon glyphicon-ok"><span>Agregar</button>
                    <button type="reset" name="reset" data-dismiss="modal" class="btn btn-default" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                         </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>