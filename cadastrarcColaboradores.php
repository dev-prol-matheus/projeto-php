<!DOCTYPE html>
<html>
<head>
  <title>Minha Página</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/estilo-cadrastoKits.css">
</head>
<body>

  <header>
    <h1>Cadastrar Colaboradores</h1>
    <?php include "includes/menu.php"  ?>

  </header>
  <section>
    <div class="container">
      <form action="php/cadastrar-colaboradores.php" method="post" class="form">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br><br>

        <label for="cargo">Cargo:</label><br>
          <select name="cargo" id="cargo">
            <option value="professor">Professor</option>
            <option value="Coordenador">coordenador</option>
            <option value="equipedelimpeza">Equipe da Limpeza</option>
            <option value="manutenção">tecnico de informatica</option>
            </select><br><br>

        <input class="btmPadrao" type="submit" value="Cadastrar">
      </form>
    </div>
  </section>
  <?php include "includes/footer.php"; ?> 
</body>

</html>
