<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Kits - Senac</title>
</head>
<body>
<header>
    <h1>Tela de login</h1>    
  </header>

  <section>
    <div class="container">
      <form action="php/login.php" method="post" class="form">
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br><br>

        <label for="cargo">Cargo:</label><br>
        <input type="password" id="cargo" name="cargo"><br><br>

        <input type="submit" value="Entrar">
      </form>
    </div>
  </section>

  <?php include "includes/footer.php" ?>
</body>
</html>