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
    <h1>Usuários de Sistema</h1>
    <?php include "includes/menu.php"  ?>

  </header>
  <section>
    <div class="container">
      <form action="php/usuarios.php" method="post" class="form">
        <label for="nome">Login:</label><br>
        <input type="text" id="login" name="login"><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>

        <input type="submit" value="Cadastrar">
      </form>
    </div>
  </section>
  <section>
  <div class="container">
    <table border="1">
      <thead>
        <tr>
          <th>id</th>
          <th>Login</th>
          <th>Senha</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conexao/conexao.php";
        try {
          $stmt = $conn->query("SELECT * FROM usuarios");
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['login']."</td>";
              echo "<td>".$row['senha']."</td>";
            }
          } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
        ?>
      
        </tr>   

        
      </tbody>
    </div>
    </table>
  </section>

  <?php include "includes/footer.php" ?>
 
  

</body>
</html>