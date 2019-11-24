<?php
	include"connect.php";
	mysqli_set_charset($connect, "utf8");
	$buscar = $_POST["q"];
	$sem = $_POST["f"];

						
	$sql="SELECT * FROM `roster_equipo` WHERE nombre LIKE '%".$buscar."%' OR apellido LIKE '%".$buscar."%'";	

	$result = mysqli_query($connect, $sql);

	while($row = mysqli_fetch_assoc($result)){ 

    	$modificar='<a href="add_to.php?id='.$row['id'].'&f_ini='.$sem.'"><input type="button" class="btn btn-round btn-warning" value="agregar"/></a>';
	   echo"   <tr>
	              <td class='col-xs-2' id='acc'>".$row['nombre']."</td>
	              <td class='col-xs-2' id='acc'>".$row['apellido']."</td>
	              <td class='col-xs-2' id='acc'>".$modificar."</td> 
	              
	            </tr>";
	}
					          	 
?>
		
		