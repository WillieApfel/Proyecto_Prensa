<?php include '../../../functions_forms.php';
?>

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Prensa</h4>
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

            <H1 style="font-family: 'Roboto', sans-serif;" > Bienvenid@ <?php echo$_SESSION['nombre'] ?> </H1> 




<!-- partial -->
 

<?php include('footer.php');
?>
