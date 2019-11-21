

<?php include '../../../functions_forms.php';
require_once "richtexteditorphp/richtexteditor/include_rte.php";
?>
<?php   
	// Create Editor instance and use Text property to load content into the RTE.  
	$rte=new RichTextEditor();   
	$rte->Text="Escriba aqui"; 
	// Set a unique ID to Editor   
	$rte->ID="Editor1";    
	$rte->TempDirectory="/home/mywebsite/tmp/";    
  $rte->MvcInit();
  $rte->MaxTextLength=1600;

  // Create Editor instance and use Text property to load content into the RTE.  
	$rte2=new RichTextEditor();   
	$rte2->Text="Escriba aqui"; 
	// Set a unique ID to Editor   
	$rte2->ID="Editor2";    
	$rte2->TempDirectory="/home/mywebsite/tmp/";    
  $rte2->MvcInit();
  $rte2->MaxTextLength=1600; 
  
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
        <form id="form1" action="generar_reporte.php" method="POST">
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
                <label for="titulo" >Redacción del reporte</label>
                 <?php     
                      // Render Editor 
                      echo utf8_encode($rte->GetString());  
                  ?>

                <br> 
                <br> 
                <label for="titulo" >Redacción de los abridores</label>
                <?php     
                    // Render Editor 
                    echo utf8_encode($rte2->GetString());  
                ?>
             <br>
             <br>
            
             <label for="titulo">Arbitros</label>
             <br>
        <br>
            <label for="titulo">H.P.: </label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" name="principal" id="principal" style="margin-left: 20px; width: 300px">
             <br>
        <br>
            <label for="titulo">1.B.: </label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" name="primera" id="primera" style="margin-left: 20px; width: 300px">
             <br>
        <br>
            <label for="titulo">2.B.: </label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" name="segunda" id="segunda" style="margin-left: 20px; width: 300px">
             <br>
        <br>
            <label for="titulo">3.B.: </label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" name="tercera" id="tercera" style="margin-left: 20px; width: 300px">
             <br>
        <br>
            <label for="titulo">R.V.: </label>
              <input type="text" class="form-control" placeholder="Nombre y Apellido" name="reserva"  id="reserva" style="margin-left: 20px; width: 300px">
             <br>
             <br>
            <br>
        
                    
                <input  href="generar_reporte.php" type="submit" class="btn btn-primary btn-lg active" role="button" value="Generar PDF" aria-pressed="true" style="width: 150px" required>
        
        <br>
        <br>
        </form>
   
<?php include('footer.php');
?>
