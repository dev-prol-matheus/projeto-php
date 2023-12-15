<?php
    $id = $_GET['id'];

    include "../conexao/conexao.php";

    try {
        $stmt = $conn->prepare("DELETE FROM colaboradores WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute(); 
        header("Location: ../Listadecolaboradores.php");
        exit();  
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
?>