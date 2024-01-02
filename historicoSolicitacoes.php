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
                            <th>Kit</th>
                            <th>Descrição</th>
                            <th>Responsável</th>
                            <th>Data/Hora da Retirada</th>
                            <th>Data/Hora da Devolução</th>
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
    </body>
</html>