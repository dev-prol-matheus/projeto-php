<?php

include "../conexao/conexao.php";

$id = $_GET['id'];

try {
    $stmt = $conn->prepare("UPDATE solicitacoes_kits SET baixa=1 WHERE id=:id");
    $stmt->bindParam(':id', $id);    
    $stmt->execute();
    header("Location: ../emUso.php");
    exit(); 
        
    $stmt->execute();
} catch(PDOException $e) {
    echo "Error: Não foi realizada a baixa para esse ID. " . $e->getMessage();
}
?>