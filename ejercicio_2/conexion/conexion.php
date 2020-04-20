<?php 

$servername = "localhost";
$username = "root";
$password = base64_decode('TWltb3Jpc2hhMDE=');
$dbname = 'curso_php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/*
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";
*/
 ?>