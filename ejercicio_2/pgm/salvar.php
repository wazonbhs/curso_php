<?php 
include("../conexion/conexion.php");
include("../conexion/funciones.php");

echo '<pre>';
print_r($_POST);
echo '</pre>';

$fecha_alta = FnFormatoFecha($_POST['fecha_alta']);

echo $fecha_alta;

die();

/**
 * Recepción de POST y llenado de variables
 * @var [type]
 */
$id_dato = $_POST['id_dato']; // nuevo = 'vacio', editar = 'dato'
$exampleInputEmail1    = strtolower($_POST['exampleInputEmail1']);
$exampleInputPassword1 = md5($_POST['exampleInputPassword1']);

if($id_dato=='')
{
	$sql = "INSERT INTO usuarios (email, password) VALUES ('".$exampleInputEmail1."', '".$exampleInputPassword1."') ";
}
else
{
	$sql = "UPDATE usuarios SET email='".$exampleInputEmail1."', password='".$exampleInputPassword1."' WHERE id=".$id_dato." LIMIT 1 ";
}


//echo $sql;

$query = $conn->query($sql);

if ($query === TRUE) {
	$last_id = ($id_dato=='') ? $conn->insert_id : $id_dato;
	$codigo = 1; // correcto
    //echo "New record created successfully ".$last_id;
} else {
	$codigo = 0; // incorrecto
	$$last_id = ' Sin ID';
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../consulta.php?codigo=".$codigo."&id=".$last_id);

?>