<?php

$servername = "108.181.92.73";
$username = "admin-kits"; //teste01
$password = "Senha!@#33"; //senha123
$dbname = "projetokits";
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetokits";
*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>