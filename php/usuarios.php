<?php
include "../conexao/conexao.php";
try {   
  
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $senhaCripto = password_hash($senha, PASSWORD_DEFAULT);
      
    $sql = "INSERT INTO usuario (login, senha) VALUES (:login, :senha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senhaCripto);
    
    $stmt->execute();

    header("Location: ../cadastrarUsuarios.php"); // dependendo do arquivo "listar kits em uso"
    exit();

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>