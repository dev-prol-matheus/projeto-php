<?php
  session_start();
  if (!isset($_SESSION['usuario_login'])) {
    header("Location: index.php");
    exit();
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitação de kit -senac</title>
    <script src="https://kit.fontawesome.com/bc9b62148c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">
   
</head>
<body>

    <header>
    <div class: Logo-Projeto>
            <img src="Logo_projetoPHP-12.png">
     </div>
        <h1>Solicitação de kits</h1>
        <?php include "includes/menu.php"; ?>
    </header>

    <section>
        <div class="container">
            <form action="php/cadastro-sol-kit.php" method="post" class="form">

            <label for="nome">Colaborador:</label><br>
            <select name="colaborador">
             <?php   
           
            include "conexao/conexao.php";

          try {
              $stmt = $conn->query("SELECT * FROM colaboradores");
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $option) {
                    echo "<option value='" . $option['id'] . "'>" . $option['nome'] . "</option>";
                }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            ?> 
            </select>
                <br>
                <br>

                <label for="kit">Kit:</label><br>
                <select name="kit">
                    <?php
                            include "conexao/conexao.php";

                            try {
                                $stmt = $conn->query("SELECT * FROM kits");
                                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            
                                foreach ($results as $option) {
                                    echo "<option value='" .$option['id'] . "'>" . $option['descricao'] ."</option>";                                    
                                }
                            } catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            
                    ?>
                </select>
            </select>
            <br><br>
            <button class="btmPadrao" type="submit"><i class="fa-solid fa-plus"></i> Solicitar</button> 
        </form>
        </div>
    </section>    
    <?php include "includes/footer.php"; ?>     
    
</body>
</html>