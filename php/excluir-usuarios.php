<?php
    $id = $_GET['id'];

    include "../conexao/conexao.php";

    try {
        $stmt = $conn->prepare("DELETE FROM usuario WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute(); 
        header("Location: ../cadastrarUsuarios.php");
        exit();  
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
?>