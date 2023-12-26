<!DOCTYPE html>
<html>
<?php
  session_start();
  if (!isset($_SESSION['usuario_login'])) {
    header("Location: index.php");
    exit();
  }
  ?>
<head>
  <title>Cadastrar Kits</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estilo-cadastroKits.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <header>
    <div class="Logo-Projeto">
        <img src="Logo_projetoPHP-12.png">
     </div>
    <h1>Cadastrar Kits</h1>
    <?php include "includes/menu.php"  ?>

  </header>
  <section>
    <div class="container">
      <form action="php/cadastrar-kits.php" method="post" class="form">
      <label for="descricao">Descrição:</label><br>
        <input type="text" id="descricao" name="descricao">

        <label for="sala">Sala:</label><br>
        <input type="text" id="sala" name="sala"><br><br>

        <label for="andar">Andar:</label><br>
        <input type="text" id="andar" name="andar">

            </select><br><br>

        <input class="btmPadrao" type="submit" value="Cadastrar">
      </form>
    </div>
  </section>

  <section>
  <div class="container">
    <table border="1">
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Sala</th>
          <th>Andar</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
      
      <?php
          include "conexao/conexao.php";

          try {
              $stmt = $conn->query("SELECT * FROM kits");
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($results as $row) {
                echo "<tr>";
                echo "<td>".$row['descricao']."</td>";
                echo "<td>".$row['sala']."</td>";
                echo "<td>".$row['andar']."</td>";
                echo "<td> 
                <a href='php/excluir.php?id=" . $row['id'] . 
                "'<span class='material-symbols-outlined'>delete</span></a></td>";
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
