<?php
include 'header.php';
$array = lable_edit_juegos($_GET['id']);

?>
<!-- plugins -->
<link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css" />
<!-- start: Content -->
<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="title">Editar</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  </div>
                </div>
              </div>
            </div> 
<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<div class="row">
						<div class="col">
						</div>
					</div>
				</div>
				<div class="panel-body">
					<form method="POST" action="update_game.php" class="form" enctype="multipart/form-data">
						<input type="hidden" name="id" id="id" class="form-control"  />
					    <br>
               			<br>
						<div class="row">
							<div class="col-sm-4">
				<label name="OS" class="form-control"  placeholder="Equipo Visitante" style="align: center; margin-top: 10px; border-color: transparent; background-color: transparent; width: 250px; font-size: 15px; position: absolute"> <?php echo $array[0]; ?> </label>
                
                <input type="number" name="carreras_v" id="carreras_v" class="form-control" placeholder="0" id="resultados" style="width: 80px; margin-left: 230px; position: absolute"> 
				
				<h1 style="position:absolute; margin-left: 335px"> - </h1>

                <input type="number" name="carreras_hc" id="carreras_hc" class="form-control" placeholder="0" id="resultados" style="width: 80px; margin-left: 380px; position: absolute">

				<label name="OS" class="form-control" placeholder="Equipo Local" style="align: center; margin-top: 10px; border-color: transparent; background-color: transparent; width: 250px; margin-left: 460px; font-size: 15px;  position: absolute"><?php echo $array[1]; ?></label>
				<input type="hidden" name="id" id="id" value=<?php echo '"'.$_GET['id'].'"'?>/>
                <br>
                <br>
               
                     <script>            
                    function validaNumericos(event) {
                    if(event.charCode >= 48 && event.charCode <= 57){
                    return true;
                    }
                    return false;        
                        }
                          </script>  
                                
                <label for="titulo"  style="margin-left: 15px; width: 250px;  position: absolute">Asistencia: </label>
            <input class="form-control" onkeypress="return validaNumericos(event)" style="margin-left: 100px; position: absolute; width: 250px" type="text" placeholder="Asistencia">
               <br>                 
                <br>
             <label for="titulo"  style="margin-left: 15px; width: 250px;  position: absolute">Duración: </label>
            <input class="form-control" style="margin-left: 100px; position: absolute; width: 250px" type="time">
                <br>
                <br>
              
                 <input type="submit" href="update_game.php" class="btn btn-primary btn-lg active" role="button" value="Guardar" aria-pressed="true" style="width: 150px"/>
        
            </div>
            </form>
            </div>
			</div>
		</div>
	</div>
</div>
<!-- end: Content -->
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatables-example').DataTable();
	});
</script>
<?php
include "footer.php";

function colorBoton($R32)
{
	if ($R32 == 1) {
		$color = 'btn-success';
	} else {
		$color = 'btn-light';
	}
	return $color;
}
?> 