<?php include('header.php');



?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">ResultadosLVPB</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 
              
                <label for="titulo" style="font-size: 25px">Fecha de la jornada</label>
              
                <br>
                <form action="partidoslvbo.php" method="POST">
                  <select type="select" name="fecha" class="form-control" id="fecha" onchange="select_fecha(this)" style="position: absolute; width: 200px">
                  
                      <?php 
                       select_lvbp_updates();
                  ?>
                    
                  </select>
                </form>
                
                <br>
            <div id="contenido">
          
             
              <table id="datatables-example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0" style="margin-top: 40px">
                    
                    <tr>
                        <th>Fecha:</th>
                        <th>Visitante</th>
                        <th>Resultado</th>
                        <th>Home Club</th>
                        <th>Configuracion</th>
                        

                    </tr>
                    <tbody id="calendario_liga">
                                    
                    </tbody>
                
                </table>
              </div>       
                      
               <br>
               <br>
                 
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width: 150px">Guardar</a>
        
            </div>
        
<?php include('footer.php');
?>