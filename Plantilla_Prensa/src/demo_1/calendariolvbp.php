<?php 
include 'header.php'
?>

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="title">Enfrentamiento</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 

<div id="container">
    <div class="panel box-shadow-none content-header" style="width = 600px">
    
    <div>
    <label for="titulo"  style="margin-left: 15px; width: 250px;  position: absolute">Visitante: </label>
    <input class="form-control" style="margin-left: 90px; position: absolute; width: 250px" type="text" placeholder="Visitante">
    <label for="titulo"  style="margin-left: 360px; width: 250px;  position: absolute">Home Club: </label>
    <input class="form-control" style="margin-left: 450px; width: 250px; position: absolute" type="text" placeholder="Home Club: "> 
    <br>
    <br>
    </div>
    <div>
    <label for="titulo" style="margin-left:15px; width: 250px; position absolute">Fecha: </label>
    <input class="form-control" type="date" style=" width: 250px; position: absolute">
    <br>
    <br>
    <label for="titulo" for="titulo" style="margin-left: 15px; width: 250px;  position absolute">Hora del juego (24 horas): </label>
    <input  class="form-control"  type="time" style=" width: 250px; position: absolute">
    <br>
    <br>
    <label for="titulo" for="titulo" style="margin-left: 15px; width: 250px;  position absolute">Transmisión: </label>
    <input  class="form-control"  type="text" style=" width: 250px; position: absolute">
    <br>
    <br>
    </div>
        <input type="submit" value="Guardar" href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width: 150px">
    </div>
    </div>
    </div>



<?php 
include 'footer.php'
?>