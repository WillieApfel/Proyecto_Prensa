<?php include('header.php');?>
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
           <form action="buscar.php" mehtod="GET">
                <input type="text" name="busqueda" id="busqueda" class="form-control" placeholder="Nombre y Apellido" style="width: 60%;">
                    <!--Footer del modal-->
                    <f class="modal-footer">
               
                        <input style="margin-left: 70px; background-color:#0000FF; border-color:#0000FF" name="submit" type="submit" class="btn btn-success" aria-hidden="true" value="Buscar">
                        
                      <button style="margin-left: 120px; background-color: red; border-color: red; color: white" type="reset" name="reset" data-dismiss="modal" class="btn btn-default}" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
               
           </form>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');
?>


   