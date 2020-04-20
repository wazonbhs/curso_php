<?php 
include("../conexion/conexion.php");

echo '<pre>';
print_r($_POST);
echo '</pre>';

/**
 * Recepción de POST y llenado de variables
 * @var [type]
 */
$exampleInputEmail1    = $_POST['exampleInputEmail1'];
$exampleInputPassword1 = md5($_POST['exampleInputPassword1']);


$sql = "INSERT INTO usuarios (email, password) VALUES ('".$exampleInputEmail1."', '".$exampleInputPassword1."') ";

echo $sql;
$query = $conn->query($sql);

if ($query === TRUE) {
	$last_id = $conn->insert_id;
	$codigo = 1; // correcto
    //echo "New record created successfully ".$last_id;
} else {
	$codigo = 0; // incorrecto
	$$last_id = ' Sin ID';
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../pagina_2.php?codigo=".$codigo."&id=".$last_id);

?>