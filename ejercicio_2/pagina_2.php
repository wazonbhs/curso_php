<?php include("cabecera.php"); 
include("conexion/conexion.php");

//ini_set('display_errors', 1);

$id_dato = $_GET['id_dato'];
$row = '';

if($id_dato!='')
{
	$sql_dato = "SELECT * FROM usuarios WHERE id = ".$id_dato." LIMIT 1 ";
	$result = $conn->query($sql_dato);

	$row = $result->fetch_assoc();
}


?>    
<script type="text/javascript">
    $(function() {
        
    });
  </script>
      
        <form action="pgm/salvar.php" method="POST" id="form_id1" class="form_class1">
          <input type="hidden" name="id_dato" value="<?=$id_dato;?>" readonly>
          <input type="hidden" name="username" value="<?=$usernameA;?>" readonly>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" value="<?php echo $row['email']; ?>">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group" >
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" value="<?=$row['password'];?>">
		  </div>

		  <div class="form-group" >
		    <label for="fecha_alta">Fecha</label>
		    <input type="date" class="form-control" id="fecha_alta" name="fecha_alta">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

		

<?php include("pie.php"); ?>    