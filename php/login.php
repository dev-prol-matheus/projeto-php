<?php

$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];

include "../conexao/conexao.php";
   
$stmt = $conn->prepare("SELECT * FROM colaboradores WHERE cpf=:cpf AND cargo=:cargo");
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':cargo', $cargo);
$stmt->execute();

$colaborador = $stmt->fetch(PDO::FETCH_ASSOC);

if ($colaborador) {
    session_start();
    $_SESSION['usuario_cpf'] = $colaborador['cpf']; 
    header('Location: ../lista-de-clientes.php'); 
    exit();
} else {
    echo "<script>
    alert('Combinação CPF/Cargo incorreta. Por favor, tente novamente.');
    console.log('Nenhum colaborador encontrado para o CPF e cargo fornecidos.');
    window.location.href = '../index.php';
    </script>";
    exit();
}

?>