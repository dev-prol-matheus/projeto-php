<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitação de kit -senac</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Solicitação de kits</h1>
        <?php include "includes/menu.php"; ?>
    </header>

    <section>
        <div class="container">
            <form action="php/cadastro.php" method="post" class="form">

            <label for="nome">Colaborador:</label><br>
            <select name="select">
            <option value="valor1">Matheus</option>
            <option value="valor2" >Fulano</option>
            <option value="valor3">Cicrano</option>
            <option value="valor3">Beltrano</option>
            <option value="valor3">Seu zé</option>
            </select>
                <br>
                <br>

            <label for="email">Kit:</label><br>
            <select name="select">
            <option value="valor1">Sala 1</option>
            <option value="valor2">Sala 2</option>
            <option value="valor3">Sala 3</option>
            <option value="valor3">Sala 4</option>
            <option value="valor3">Sala 5</option>
            <option value="valor3">Sala 6</option>
            </select>
            <br><br>
            <input class="btmPadrao" type="submit" value="Solicitar">
        </form>
        </div>
</body>
</html>