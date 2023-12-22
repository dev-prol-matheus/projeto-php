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
                                    $stmt = $conn -> query("SELECT * FROM kits");
                                    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

                                    foreach($result as $row){
                                        echo"<tr>";
                                            echo"<td> Sala: "  . $row['sala'] . "</td>";
                                            echo"<td>" . $row['descricao'] . "</td>";
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