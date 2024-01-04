<?php
  session_start();
  if (!isset($_SESSION['usuario_login'])) {
    header("Location: index.php");
    exit();
  }
  ?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kits em Uso</title>
        <script src="https://kit.fontawesome.com/bc9b62148c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/estilo-kits-em-uso.css">
        <style>
            #searchInput{
                margin-top: 10px;
                margin-left: 600px;
                
            }

            .emUsoDiv{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .emUsoTable {
                border-collapse: collapse;
                width: 90%;
            }


            th, td {
                padding: 15px;
                align-items: center;
            }
        </style>
    </head>



    <body>
        <header>
        <div class: Logo-Projeto>
                <img src="Logo_projetoPHP-12.png">
        </div>
        <h1>Cadastrar Kits</h1>
            <?php include "includes/menu.php"?>
        </header>

        <input class="form" type="text" placeholder="Pesquisar..." id="searchInput">

        <div class="emUsoDiv">
            <section>
                <table border="1" class ="emUsoTable">
                    <thead>
                        <tr>
                        <th><i class="fa-solid fa-bag-shopping"></i> Kit</th>
                        <th><i class="fa-regular fa-file-lines"></i> Descrição</th>
                        <th><i class="fa-solid fa-user"></i> Responsável</th>
                        <th><i class="fa-solid fa-calendar-days"></i> Data/Hora da Retirada</th>
                        <th><i class="fa-solid fa-calendar-days"></i> Data/Hora da Devolução</th>
                        <th><i class="fa-solid fa-circle-info"></i> Status</th> 
                        </tr>

                    </thead>
                    <tbody>
                        <?php 
                            include "conexao/conexao.php";
                            try{
                                $stmt = $conn -> query("SELECT * FROM solicitacoes_kits WHERE baixa = 1");
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
                                        echo"<td>" . $row['data_hora_entrega'] . "</td>";
                                        if ($row['baixa'] == "0"){
                                            echo"<td> Kit em Uso </td>";
                                        }else{
                                            echo"<td> Kit entregue </td>";  
                                        }
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