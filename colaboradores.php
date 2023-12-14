<!DOCTYPE html>
<html>
  


<head>
  <title>Minha Página</title>
  <link rel="stylesheet" href="">
</head>
<body>

  <header>
    <h1>Cadastro Colaboradores</h1>
    <?php include "includes/menu.php"  ?>

  </header>
  <section>
    <div class="container">
      <form action="php/cadastro-colaboradores.php" method="post" class="form">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br><br>

        <label for="cargo">Cargo:</label><br>
        <input type="text" id="cargo" name="cargo"><br><br>

        <input type="submit" value="Cadastrar">
      </form>
    </div>
  </section>
  

  <?php include "includes/footer.php" ?>
 
  

</body>
</html>