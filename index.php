<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Kits - Senac</title>
    <script src="https://kit.fontawesome.com/bc9b62148c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">
</head>
<body>

    <header>        
        <div class: Logo-Projeto>
            <img src="Logo_projetoPHP-12.png">
        </div>    
        <h1>Sistema de Kits</h1>   
    </header>

    <section>
        <div class="container">
        <form action="php/login.php" method="post" id="LoginForm" class="form">
            <label for="login"><i class="fa-solid fa-user"></i> Login:</label><br>
            <input type="text" id="login" name="login" placeholder="Login" required><br><br>
            <label for="login"><i class="fa-solid fa-key"></i> Senha:</label><br>
            <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
            <button class="btmPadrao" type="submit"><i class="fa-solid fa-arrow-right-to-bracket"> </i> Entrar</button>   
        </form>     
        </div>
    </section>
    <?php include "includes/footer.php"; ?> 
</body>
</html> 