<?php

$arreglo_int = array('Vento', 'Tiguan', 'Vocho');

$arreglo  = array('volvo' => 'N/A', 'audi' => 'Q5', 'VW' => $arreglo_int);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Form 2</title>
  </head>
  <body>
    
    <div class="container-fluid">

  <?php 

  	foreach ($arreglo as $key => $value)
	{
		if($key!='VW')
		{
			echo '<div class="alert alert-primary" role="alert">'.$key.' - '.$value.'</div>';			
		}
		else
		{
			echo '<div class="alert alert-success" role="alert">';
			echo $key;
			echo ' - ';
			foreach ($value as $key1)
			{
				echo $key1;
				echo ' | ';
			}

			echo '</div>';
		}

	}

  ?>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>