<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mieladm";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée");
}
?>
