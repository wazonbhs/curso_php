<?php 
session_start();

$servername = "localhost";
$username = "curso_php";
$password = 'Server111';
$dbname = 'curso_php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

function loggedin()
{
 if (isset($_SESSION['username'])||isset($_COOKIE['username']))
 {
    $loggedin = TRUE;
    return $loggedin;
 }
}

?>
