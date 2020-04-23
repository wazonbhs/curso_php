<?php 
require_once('core.php');
require_once('../ejercicio_2/conexion/conexion.php');

ini_set('display_startup_errors', 1);

$sql = "SELECT * FROM usuarios ORDER BY id";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
 
	$nombreFruta = $row['email'];
	$colorFruta  = $row['password'];

	$fruta = new Frutas($nombreFruta, $colorFruta);
	echo $fruta->FnResultado();
}


$fruta1 = new Frutas('Sandia', 'Rojo');
$fruta2 = new Frutas('Uva', 'Morado');

echo $fruta1->FnRecuperaNombreFruta();
echo '<br>';
echo $fruta2->FnRecuperaNombreFruta();
echo '<hr>';
echo $fruta1->FnRecuperaColorFruta();
echo '<br>';
echo $fruta2->FnRecuperaColorFruta();


echo '<hr>';
echo $fruta1->FnResultado();
echo '<br>';
echo $fruta2->FnResultado();


?>