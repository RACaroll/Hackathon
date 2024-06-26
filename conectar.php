<?php
// Variaveis para conectar ao banco de dados
$servername = "localhost:3306";
$username = "root";
$password = "um2tres4";
$dbname = "gestor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>