<?php

include("../conexion/conexion.php");

$id_dato = $_GET['id_dato'];

$sql = "DELETE FROM usuarios WHERE id={$id_dato} LIMIT 1 ";

$query = $conn->query($sql);

if ($query === TRUE) {
	$last_id = $id_dato;
	$codigo = 3; // correcto
    //echo "New record created successfully ".$last_id;
} else {
	$codigo = 0; // incorrecto
	$$last_id = ' Sin ID';
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../consulta.php?codigo=".$codigo."&id=".$last_id);