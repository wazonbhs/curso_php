<?php
function FnSaludar()
{
	$var = 'Hola';
	return $var;
}

function FnDespedir()
{
	$var = 'Adios';
	echo $var;
}

function FnFormatoFecha($fecha)
{
    $fecha = date_create($fecha);
    $fecha = date_format($fecha, 'd-m-Y');
    return $fecha;
}