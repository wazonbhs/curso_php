<?php include("cabecera.php"); ?>    
<script type="text/javascript">
    $(function() {
        
    });
  </script>
      
        <form action="pgm/salvar.php" method="POST" id="form_id1" class="form_class1">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group" >
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php 
		$codigo_get = $_GET['codigo'];
		$id_get = $_GET['id'];


		if($codigo_get!='')
		{
			if($codigo_get=='1')
			{
				echo '<div class="alert alert-success" role="alert">
					  Registro guardado correctamente con el folio #'.$id_get.'
					</div>';
			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">
					  Probelmas al guardar el registro
					</div>';
			}
		}

		?>

<?php include("pie.php"); ?>    