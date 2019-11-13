<?php include('header.php');
?>

  <div class="container" id="advanced-search-form">
        <form>
            <br>
         <div class="form-group">
                <label for="titulo">Titulo de la noticia</label>
                <input type="text" class="form-control" id="titulo">
            </div>
            <div class="form-group">
                <label for="subinfo">Subtitulo de la noticia</label>
                <input type="text" class="form-control" id="subinfo">
            </div>
            <div class="form-group">
                <label>Noticia de la portada</label>
                 <br>
                 <textarea class="ckeditor" name="editor"></textarea>
            <div class="form-group">
                 <br>
                <label for="">Arbitros</label>
                <br>
                <br>
                    <select name="OS" class="form-control" style="width: 80px; position: absolute">
                    <option value="1">H.P.</option> 
                    <option value="2">1B</option> 
                    <option value="3">2B</option>
                    <option value="4">3B</option> 
                    <option value="5">R.V.</option> 
                 </select>
                <input type="text" class="form-control" placeholder="Nombre y Apellido" id="arbitros1" style="margin-left: 90px; width: 300px">
                <br>
                <select name="OS" class="form-control"  style="width: 80px; position: absolute">
                <option value="1">H.P.</option> 
                <option value="2">1B</option> 
                <option value="3">2B</option>
                <option value="4">3B</option> 
                <option value="5">R.V.</option> 
             </select>
                <input tbr♠ype="text" class="form-control" placeholder="Nombre y Apellido" id="arbitros2"  style="margin-left: 90px; width: 300px">
            <br>
             <select name="OS" class="form-control" style="width: 80px; position: absolute">
             <option value="1">H.P.</option> 
             <option value="2">1B</option> 
             <option value="3">2B</option>
             <option value="4">3B</option> 
             <option value="5">R.V.</option> 
          </select>
                <input type="text" class="form-control"  placeholder="Nombre y Apellido" id="arbitros3" style="margin-left: 90px; width: 300px">
                <br>
                <select name="OS" class="form-control" style="width: 80px; position: absolute">
                <option value="1">H.P.</option> 
                <option value="2">1B</option> 
                <option value="3">2B</option>
                <option value="4">3B</option> 
                <option value="5">R.V.</option> 
             </select>
                <input type="text" class="form-control" placeholder="Nombre y Apellido" id="arbitros4" style="margin-left: 90px; width: 300px">
              <br>
             <select name="OS"class="form-control" style="width: 80px; position: absolute">
             <option value="1">H.P.</option> 
             <option value="2">1B</option> 
             <option value="3">2B</option>
             <option value="4">3B</option> 
             <option value="5">R.V.</option> 
          </select>
                <input type="text" class="form-control" placeholder="Nombre y Apellido" id="arbitros5" style="margin-left: 90px; width: 300px">
            </div>
             <br>
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="width: 150px; margin-left: 210px">Guardar</a>
        <br>
        <br>
   
   
<?php include('footer.php');
?>
