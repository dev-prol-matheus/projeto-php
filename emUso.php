<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if (!isset($_SESSION['usuario_login'])) {
        header("Location: index.php");
        exit();
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kits em Uso</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/estilo-cadrastocolaboradores.css">

        <style>
            #searchInput{
                margin-top: 10px;
                margin-left: 540px;
            }

            .emUsoDiv{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .emUsoTable {
                border-collapse: collapse;
                width: 100%;
            }


            th, td {
                padding: 10px;
            }
        </style>
    </head>



    <body>
        <header>
            <div class: Logo-Projeto>
                <img src="Logo_projetoPHP-12.png">
            </div>
            <?php include "includes/menu.php"?>
        </header>

        <input type="text" placeholder="Search..." id="searchInput">

        <div class= "emUsoDiv">

        <section>
            <table border="1" class ="emUsoTable">
                <thead>
                    <tr>
                        <th>Kit</th>
                        <th>Descrição</th>
                        <th>Responsável</th>
                        <th>Retirada</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                        include "conexao/conexao.php";
                        try{
                            $stmt = $conn -> query("SELECT * FROM solicitacoes_kits where baixa = 0");
                            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                            
                            foreach($result as $row){
                                echo"<tr>";
                                    
                                    $idKit = $row['id_kit'];
                                    
                                    $stmt = $conn -> query("SELECT * FROM kits where id =  $idKit");
                                    $kit = $stmt -> fetch(PDO::FETCH_ASSOC);

                                    echo"<td>Sala: " .  $kit['sala'] . "</td>";
                                    echo"<td>" .  $kit['descricao'] . "</td>";

                                    $idColaborador = $row['id_colaborador'];
                                
                                    $stmt = $conn -> query("SELECT * FROM colaboradores where id = $idColaborador");
                                    $colaborador = $stmt -> fetch(PDO::FETCH_ASSOC);

                                    echo"<td>" . $colaborador['cargo'] . ": " . $colaborador['nome'] . "</td>";
                                    echo"<td>" . $row['data_hora_solicitacao'] . "</td>";
                                    if ($row['baixa'] == "0"){
                                        echo"<td> Kit em Uso </td>";
                                    }else{
                                        echo"<td> Kit entregue </td>";  
                                    }
                                    echo "<td>
                                    <a href='php/baixaKits.php?id=".$row['id']."'>Realizar Baixa<a> 
                                    </td>";
                                echo"</tr>";
                                
                            }
                        }catch(PDOException $e){}
                    ?>
                </tbody>
            </table>
            
        </section>
        <?php include "includes/footer.php"; ?> 
        <script src="javascript/barradebusca.js"></script>

    </body>
</html>