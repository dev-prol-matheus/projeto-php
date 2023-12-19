<!DOCTYPE html>
<html>

<head>
  <title>Minha Página</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  <header>
    <h1>Cadastrar de usuarios</h1>
    <?php include "includes/menu.php"  ?>

    </header>
  <section>
    <div class="container">
      <form action="php/usuarios.php" method="post" class="form">
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>

        <input class="btmPadrao" type="submit" value="Cadastrar">
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
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conexao/conexao.php";
        try {
          $stmt = $conn->query("SELECT * FROM usuario");
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['login']."</td>";
              echo "<td> 
                <a href='php/excluir-usuarios.php?id=" . $row['id'] . 
                "'<span class='material-symbols-outlined'>delete</span></a></td>";
                echo "</tr>";
            }
          } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }
        ?>
      
        </tr>   

        
      </tbody>
    </div>
    </table>
    <?php include "includes/footer.php"; ?> 
  </section>