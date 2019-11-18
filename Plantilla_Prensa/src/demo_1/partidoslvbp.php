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
              
                <select type="select" class="form-control" id="dia" style="position: absolute; width: 200px">
                     <option value="1"> </option>
                   
              </select>
              
               <br>
            <div id="contenido">
             
              <table id="datatables-example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0" style="margin-top: 40px">
                    
                    <tr>
                         <td>Home Club</td>
                         <td>Carreras Home Club</td>
                         <td>Carreras Visitante</td>
                         <td>Visitante</td>
                    </tr>
                    <?php 
                        $sql= "SELECT `home_club`, `visitante`, `carreras_hc`, `carreras_v` FROM `calendario_liga` ";
                        $resultado=mysqli_query($connect,$sql);
                        while($mostrar=mysqli_fetch_array($resultado)) 
                        { ?>
                               <tr>
                                    <td><?php  echo $mostrar['home_club']?></td>
                                    <td><?php  echo $mostrar['carreras_hc']?></td>
                                    <td><?php  echo $mostrar['carreras_v']?></td>
                                    <td><?php  echo $mostrar['visitante']?></td>
                                </tr>
                            
                             <?php 
                            }
                        ?>
                </table>
              </div>       
                      
               <br>
               <br>
                 
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width: 150px">Guardar</a>
        
            </div>
        
<?php include('footer.php');
?>