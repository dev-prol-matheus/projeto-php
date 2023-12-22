<?php
include "../conexao/conexao.php";
try {   
  
    $descricao = $_POST['descricao'];
    $sala = $_POST['sala'];
    $andar = $_POST['andar'];

    $sql = "INSERT INTO kits (descricao, sala, andar) VALUES (:descricao,:sala,:andar)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':sala', $sala);
    $stmt->bindParam(':andar', $andar);
    
    $stmt->execute();

    header("Location: ../cadastrarKits.php");
    exit();

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>