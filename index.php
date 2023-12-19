<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Kits - Senac</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Tela de Login</h1>
       
    </header>

    <section>
    <div class="container">
      <form action="php/login.php" method="post" class="form">
        <label for="nome">Login:</label><br>
        <input type="text" id="login" name="login"><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>

        <input type="submit" value="entrar">
      </form>
    </div>
        <?php include "includes/footer.php"; ?>
</body>
</html>