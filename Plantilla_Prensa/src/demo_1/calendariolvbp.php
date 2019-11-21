<?php 
include '../../../functions_forms.php';
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
    <form action="insert_encuentro.php" method="POST">
        <label for="titulo"  style="margin-left: 15px; width: 250px;  position: absolute">Visitante: </label>
        <select name="local" class="form-control" style="margin-left: 90px; width: 250px" required>
                    <option value="0">--Seleccionar--</option>
                    <option value="1">Navengantes de Magallanes</option>
                    <option value="2">Águilas del Zulia</option>
                    <option value="3">Bravos de Margarita</option>
                    <option value="4">Cardenales de Lara</option>
                    <option value="5">Caribes de Anzoátegui</option>
                    <option value="6">Leones del Caracas</option>
                    <option value="7">Tiburones de la Guaira</option>
                    <option value="8">Tigres de Aragua</option>
                </select>
        <label for="titulo"  style="margin-left: 50px; width: 250px;  position: absolute">Home Club:</label>
        <select name="visit" class="form-control" style="margin-left: 150px; width: 250px" required>
                    <option value="0">--Seleccionar--</option>
                    <option value="1">Navengantes de Magallanes</option>
                    <option value="2">Águilas del Zulia</option>
                    <option value="3">Bravos de Margarita</option>
                    <option value="4">Cardenales de Lara</option>
                    <option value="5">Caribes de Anzoátegui</option>
                    <option value="6">Leones del Caracas</option>
                    <option value="7">Tiburones de la Guaira</option>
                    <option value="8">Tigres de Aragua</option>
                </select>
        <br>
        <br>
        </div>
        <div>
        <label for="titulo" style="margin-left:15px; width: 250px; position absolute">Fecha: </label>
        <input class="form-control" name="fecha" id="fecha" type="date" style=" width: 250px; position: absolute">
        <br>
        <br>
        <label for="titulo" for="titulo" style="margin-left: 15px; width: 250px;  position absolute">Hora del juego (24 horas): </label>
        <input  class="form-control" name="hora" id="hora" type="time" style=" width: 250px; position: absolute">
        <br>
        <br>
        <label for="titulo" for="titulo" style="margin-left: 15px; width: 250px;  position absolute">Transmisión: </label>
        <input  class="form-control" name="transmision" id="transmision" type="text" style=" width: 250px; position: absolute">
        <br>
        <br>
        </div>
            <input type="submit" value="Guardar" href="insert_encuentro.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width: 150px">
        </div>
        </div>
        </div>
    </form>



<?php 
include 'footer.php'
?>