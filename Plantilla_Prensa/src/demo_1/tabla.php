<?php
	include"connect.php";

	$buscar = $_POST["q"];
	$param = $_POST["y"];
						
	$sql="SELECT * FROM `roster_equipo` WHERE  $param LIKE '%".$buscar."%'";	

	$result = mysqli_query($connect, $sql);

	while($row = mysqli_fetch_assoc($result)){ 

    	$modificar='<a href="edit.php?id=' . $row['id'] . '"><input type="button" class="btn btn-round btn-warning" value="editar"/></a>';
	   echo"   <tr>
	              <td class='col-xs-2' id='acc'>".$row['nombre']."</td>
	              <td class='col-xs-2' id='acc'>".$row['apellido']."</td>
	              <td class='col-xs-2' id='acc'>".$modificar."</td> 
	              
	            </tr>";
	}
					          	 
?>
		
		