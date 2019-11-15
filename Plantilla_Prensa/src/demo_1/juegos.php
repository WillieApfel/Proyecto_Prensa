

<?php include('header.php');
function select_juegos(){
  global $connect, $fecha, $row_temp;  
  $sql= mysqli_query($connect,"SELECT c.*, cm.nro_juego, el.abreviatura AS 'loc', ev.abreviatura AS 'vis' 
      FROM calendario_liga c INNER JOIN calendario_mag cm ON c.id = cm.id INNER JOIN equipos el 
      ON c.home_club=el.id INNER JOIN equipos ev ON c.visitante=ev.id ORDER BY cm.nro_juego");
  while($row=mysqli_fetch_array($sql)){
      if($row['home_club']==1){
          $rival=$row['vis'];
      }else{
          $rival=$row['loc'];
      }
      echo '<option value="'.$row['fecha'].'">Juego #'.$row['nro_juego'].' vs '.$rival.'</option>';

  }


}


?>
  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Noticias</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 


  <div class="container" id="advanced-search-form">
        <form action="generar_reporte.php" method="POST">
            <br>

            <div>
                <label for="titulo" >Titulo de la noticia</label>
                <br>
                <select name="juego" style="width: 250px">

                <option value="1"> </option>
                <?php select_juegos();?>

                </select>
            <br> 
          </div>
          <div>
                <label for="titulo">Abridores del Día</label>
                <input type="text" name="abridores" class="form-control" id="titulo">
            <br> 
            </div>

            
            <div class="form-group">
            <br> 
            <br> 
                <label>Redacción de el reporte</label>
                 <br>
                 <br> 
                 <textarea class="ckeditor" id="redaccion" name="redaccion"></textarea>
            <div class="form-group">
                 <br>
                
             </select>
                
          </select>
            
             </select>
            
          </select>
                
            </div>
             <br>
        <input href="generar_reporte.php" type="submit" class="btn btn-primary btn-lg active" role="button" value="Generar PDF" aria-pressed="true" style="width: 150px; margin-left: 210px">
        
        <br>
        <br>
        </form>
   
<?php include('footer.php');
?>
