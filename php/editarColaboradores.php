<?php

include "../conexao/conexao.php";

$id = $_POST['id'];
$novoNome = $_POST['nome'];
$novoTelefone = $_POST['telefone'];
$novoCPF = $_POST['cpf'];
$novoCargo = $_POST['cargo'];

try {
    $stmt = $conn->prepare("UPDATE colaboradores SET nome=:nome, telefone=:telefone, cpf=:cpf, cargo=:cargo WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $novoNome);
    $stmt->bindParam(':telefone', $novoTelefone);
    $stmt->bindParam(':cpf', $novoCPF);
    $stmt->bindParam(':cargo', $novoCargo);
    $stmt->execute();
    header("Location: ../Listadecolaboradores.php");
    exit(); 
        
    $stmt->execute();
    echo "Record updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>