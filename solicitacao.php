<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitação de kit -senac</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">
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
             <?php   
           
            include "conexao/conexao.php";

          try {
              $stmt = $conn->query("SELECT * FROM colaboradores");
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($results as $option) {
                    echo "<option value='" . $option['id'] . "'>" . $option['nome'] . "</option>";
                }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            ?> 
            </select>
                <br>
                <br>

            <label for="email">Kit:</label><br>
            <select name="select">
            <option value="valor1">Sala 1</option>
            <?php

            include "conexao/conexao.php";

            try {
                $stmt = $conn->query("SELECT * FROM kits");
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                  foreach ($results as $option) {
                    echo "<option value='" . $option['id'] . "'>" . $option['nome'] . "</option>";
                }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            ?>

            </select>
            <br><br>
            <input class="btmPadrao" type="submit" value="Solicitar">
        </form>
        </div>
    </section>
    
    <?php include "includes/footer.php" ?>
    
</body>
</html>