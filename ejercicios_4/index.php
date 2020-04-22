<?php 
require_once('core.php');

$arrayHijo_A = array('Sandia', 'Roja');
$arrayHijo_B = array('Uva', 'Morada');
$arrayHijo_C = array('Pera', 'Verde');

$arrayPadre = array($arrayHijo_A, $arrayHijo_B, $arrayHijo_C);


foreach ($arrayPadre as $key)
{
	$nombreFruta = $key[0];
	$colorFruta  = $key[1];

	$fruta = new Frutas($nombreFruta, $colorFruta);
	echo $fruta->FnResultado();
}

/*
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
*/

?>