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
        <div class: Logo-Projeto>
            <img src="Logo_projetoPHP-12.png">
        </div>
        <h1>Solicitação de kits</h1>       
    </header>


    <section>
        <div class="container">
        <form action="php/login.php" method="post" id="LoginForm" class="form">
            <input type="text" id="login" placeholder="login" required><br><br>
            <input type="password" id="senha" placeholder="senha" required><br><br>
            <button type="submit">Entrar</button>        
        </div>
    </section>
    <?php include "includes/footer.php"; ?> 
</body>
</html>