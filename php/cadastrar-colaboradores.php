<?php
include "../conexao/conexao.php";
try {   
  
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];

    $sql = "INSERT INTO colaboradores (nome,telefone,cpf,cargo) VALUES (:nome,:telefone,:cpf,:cargo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':cargo', $cargo);
    
    $stmt->execute();

    header("Location: ../Listadecolaboradores.php");
    exit();

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>