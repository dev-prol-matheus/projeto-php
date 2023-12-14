<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

include "../conexao/conexao.php";
   
$stmt = $conn->query("SELECT * FROM usuarios WHERE login='$login'");
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$verificaSenha = password_verify($senha, $usuario['senha']);

if ($verificaSenha){
    header('location: ../solicitacao.php');
    session_start();
    $_SESSION['usuario_login'] = $login; 
}else{
    echo "<script>
    alert('Senha incorreta. Por favor, tente novamente.');
    window.location.href = '../index.php';
    </script>";
}

exit();

?>