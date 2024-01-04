<?php

include "../conexao/conexao.php";
date_default_timezone_set("America/Recife");

$id = $_GET['id'];
$dataDevolucao = date("Y-m-d H:i:s");

try {
    $stmt = $conn->prepare("UPDATE solicitacoes_kits SET baixa=1, data_hora_entrega=:dataDevolucao WHERE id=:id");

    $stmt->bindParam(':id', $id);  
    $stmt->bindParam(':dataDevolucao', $dataDevolucao);  
    $stmt->execute();
    header("Location: ../emUso.php");
    exit(); 
        
    $stmt->execute();
} catch(PDOException $e) {
    echo "Error: Não foi realizada a baixa para esse ID. " . $e->getMessage();
}
?>