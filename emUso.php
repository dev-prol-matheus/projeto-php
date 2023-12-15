<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kits em Uso</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">
</head>



<body>
    <header>
        <?php include "includes/menu.php"?>
    </header>

    <div class= "container">
    <section>
        <table border="1">
            <thead>
                <tr>
                    <th>ID do Kit</th>
                    <th>Solicitado por:</th>
                    <th>Solicitado em:</th>
                    <th>Devolvido em:</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "conexao/conexao.php";
                    try{
                        $stmt = $conn -> query("SELECT * FROM solicitacoes_kits");
                        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

                        foreach($result as $row){
                            echo"<tr>";
                                echo"<td>" . $row['id_kit'] . "</td>";
                                echo"<td>" . $row['id_colaborador'] . "</td>";
                                echo"<td>" . $row['data_hora_solicitacao'] . "</td>";
                                echo"<td>" . $row['data_hora_entrega'] . "</td>";
                                echo"<td>" . $row['baixa'] . "</td>";
                            echo"</tr>";
                            
                        }
                    }catch(PDOException $e){}
                ?>
            </tbody>
          </table>
    </section>
    <?php include "includes/footer.php"; ?> 
</body>
</html>