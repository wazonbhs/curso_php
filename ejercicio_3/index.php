<?php
session_start();

$usuario = 'usuario1';
$empresa = 'PIME';
$puesto  = 'Soporte Técnico';

$_SESSION['user'] = $usuario;
$_SESSION['empr'] = $empresa;
$_SESSION['pues'] = $puesto;

echo 'Se llenó la session';


/**
 * Extraer y colocar en array
 * @var [type]

$dato = explode('-','2019-08-12');

echo '<pre>';
print_r($dato);
echo '</pre>';

echo "Mes = ".$dato[1];

*/

/*

/**
 * Extraer valores
 * @var string

$dato = '012180123456789128';

$banco = substr($dato,0,3);
$sucursal = substr($dato,3,3);
$cuenta = substr($dato,6,11);
$digito = substr($dato,-1);

echo $dato;

echo '<br> Banco = '.$banco;
echo '<br> sucursal = '.$sucursal;
echo '<br> cuenta = '.$cuenta;
echo '<br> digito = '.$digito;
*/