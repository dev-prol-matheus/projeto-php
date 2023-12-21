<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kits em Uso</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-kits-em-uso.css">
</head>



<body>
    <header>
    <div class: Logo-Projeto>
            <img src="Logo_projetoPHP-12.png">
     </div>
        <?php include "includes/menu.php"?>
    </header>

    <div class = "kits-em-uso">
    <section>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">Kit</th>
                    <th colspan="3">Responsável</th>
                    <th rowspan="2">Retirada</th>
                    <th rowspan="2">Devolução</th>
                    <th rowspan="2">Status</th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Sala</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cargo</th>
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
                                    echo"<td>" . $row['sala_kit'] . "</td>";
                                    echo"<td>" . $row['id_colaborador'] . "</td>";
                                    echo"<td>" . $row['nome_colaborador'] . "</td>";
                                    echo"<td>" . $row['cargo_colaborador'] . "</td>";
                                    echo"<td>" . $row['data_hora_solicitacao'] . "</td>";
                                    echo"<td>" . $row['data_hora_entrega'] . "</td>";
                                    echo"<td>" . ($row['baixa'] ? "Em Uso" : "Disponível") . "</td>";
                                echo"</tr>";          
                            }                  
                        }catch(PDOException $e){echo "Falha na consulta a tabela kit do BD";}




                ?>
            </tbody>
          </table>
    </section>
    <?php include "includes/footer.php"; ?> 
</body>
</html>