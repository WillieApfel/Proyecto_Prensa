

<?php include('header.php');


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
                <label for="titulo" >Juego del día</label>
                <br>
                <select name="juego" class="form-control" style="width: 250px" required>
                    <option value="1"> </option>
                <?php select_juegos();?>
                </select>
              </div>
            <br>
            <br>
          <div>
                <label for="titulo">Abridores del día</label>
                <input type="text" name="abridores" class="form-control" id="titulo" required>
            <br> 
            </div>
            <br> 
            <br> 
                <label for="titulo" >Redacción de el reporte</label>
                 <textarea class="ckeditor" id="redaccion" name="redaccion" required></textarea>

                <br> 
                <br> 
                <label for="titulo" >Redacción de abridores</label>
                 <textarea class="ckeditor" id="redaccion_abridores" name="redaccion_abridores" required></textarea>

             <br>
                    
                <input  href="generar_reporte.php" type="submit" class="btn btn-primary btn-lg active" role="button" value="Generar PDF" aria-pressed="true" style="width: 150px" required>
        
        <br>
        <br>
        </form>
   
<?php include('footer.php');
?>
