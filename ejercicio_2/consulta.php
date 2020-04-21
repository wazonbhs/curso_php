<?php 
include("cabecera.php"); 
include("conexion/conexion.php");

$sql_select = "SELECT * FROM usuarios ";
$result = $conn->query($sql_select);
 
$codigo_get = $_GET['codigo'];
$id_get = $_GET['id'];

switch($codigo_get)
{
  case '1':
  $var_msg = '<div class="alert alert-success" role="alert">
      Registro guardado correctamente con el folio #'.$id_get.'
    </div>';
    break;

  case '0':
  $var_msg = '<div class="alert alert-danger" role="alert">
      Probelmas al guardar el registro
    </div>';
    break;

  case '3':
  $var_msg = '<div class="alert alert-info" role="alert">
      Registro eliminiado correctamente #'.$id_get.'
    </div>';
    break;

  default:
  $var_msg = '';
  break;
}

?>   

<h4>Consulta de correos</h4>

<?=$var_msg;?>

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
				      <td><a href="pagina_2.php?id_dato='.$row['id'].'" class="btn btn-info btn-sm"> Editar </a>
				      <a href="pgm/delete.php?id_dato='.$row['id'].'" class="btn btn-danger btn-sm"> Eliminar </a></td>
				    </tr>';
    	}
  	?>
  </tbody>
</table>


<?php include("pie.php"); ?>    
