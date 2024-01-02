<?php
include "../conexao/conexao.php";
try {   
    date_default_timezone_set("America/Recife");
  
    $colaborador = $_POST['colaborador'];
    $kit = $_POST['kit'];
    $dataSolicitacao = date("D-m-y H:i:s");
    $baixa = 0;
    $dataEntrega = "";

    $sql = "INSERT INTO  solicitacoes_kits (data_hora_solicitacao, id_kit, id_colaborador, data_hora_entrega, baixa) VALUES (:dataSolicitacao, :kit, :colaborador, :dataEntrega, :baixa)";
    $stmt = $conn->prepare($sql);
  
    $stmt->bindParam(':dataSolicitacao', $dataSolicitacao);
  
    $stmt->bindParam(':kit', $kit);
   
    $stmt->bindParam(':colaborador', $colaborador);
   
    $stmt->bindParam(':dataEntrega', $dataEntrega);
   
    $stmt->bindParam(':baixa', $baixa);


    $stmt->execute();

    header("Location: ../emUso.php");
    exit();

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>