<?php 
include("conexion.php");

$username = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

$sql = "SELECT password FROM usuarios WHERE email = '".$username."' LIMIT 1 ";
$query = $conn->query($sql);

$count = $query->field_count;

if($count>0) // encontro datos
{
	$row = $query->fetch_assoc();
	$password_DB = $row['password'];
	if($password_DB==$password) // si es igual al pass de la DB
	{
		echo 'Todo correcto';
		$_SESSION['username'] = $username;
		header("Location: index.php");
	}
	else
	{
		echo 'Error 2: El password no coincide '.$password;
		die();
	}
}
else
{
	echo 'Error 1: No existe el usuario indicado';
	die();
}

?>