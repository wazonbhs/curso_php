<?php 
include("cabecera.php"); 
include("conexion/conexion.php");

$sql_select = "SELECT * FROM usuarios ";
$result = $conn->query($sql_select);

?>    

<h4>Consulta de correos</h4>

<table class="table table-striped table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  	<?php
    	while($row = $result->fetch_assoc())
    	{
        	echo '<tr>
				      <td>'.$row['id'].'</td>
				      <td>'.$row['email'].'</td>
				      <td>'.$row['password'].'</td>
				      <td><a href="pagina_2.php?id='.$row['id'].'" class="btn btn-info btn-sm"> Editar </a>
				      <a href="pgm/delete.php?id='.$row['id'].'" class="btn btn-danger btn-sm"> Eliminar </a></td>
				    </tr>';
    	}
  	?>
  </tbody>
</table>


<?php include("pie.php"); ?>    
