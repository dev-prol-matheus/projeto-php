<?php

$servername = "200.9.22.2";
$username = "admin-kits"; 
$password = "Senha!@#33"; 
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