<?php
  session_start();
  if (!isset($_SESSION['usuario_login'])) {
    header("Location: index.php");
    exit();
  }
  ?>
<!DOCTYPE html>
<html>

<head>
  <title>Minha Página</title>
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://kit.fontawesome.com/bc9b62148c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

 <header>
  <div class: Logo-Projeto>
            <img src="Logo_projetoPHP-12.png">
     </div>
    <h1>Meus Colaboradores</h1>

    <?php include "includes/menu.php"  ?>

  </header>

  <section>
  <div class="container" class="ajusteContainer">
    <table border="1">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>cpf</th>
          <th>cargo</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      
      <?php
          include "conexao/conexao.php";

          try {
              $stmt = $conn->query("SELECT * FROM colaboradores");
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($results as $row) {
                echo "<tr>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['cpf']."</td>";
                echo "<td>".$row['cargo']."</td>";
                echo "<td> 
                <a href='php/excluir.php?id=" . $row['id'] . 
                "'<i class='fa-solid fa-trash-can'></i></a></td>";
                echo "</tr>";
              }
          } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
        ?>         
      </tbody>
    
    </table>
  </div>
  </section>
  <?php include "includes/footer.php"; ?> 
  
  

</body>
</html>