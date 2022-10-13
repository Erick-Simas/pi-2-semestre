<html>
    <head>
        <title>Listar os Produtos</title>
    </head>
    <body>
        <h1>Listar os Produtos</h1>
        <br>
        <?php
//Dados para conexao ao MYSQL
$mysqlhostname = "144.22.244.104";
$mysqlport = "3306";
$mysqlpassword = "Bravo4Fun";
$mysqlusername = "Bravo4Fun";
$mysqldatabase = "Bravo4Fun";

//MOSTRA a string de conexao ao MYSQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

$cmd = $pdo->query("SELECT * FROM PRODUTO, CATEGORIA Limit 10");
?>
<br>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Preco</th>
                <th>Desconto</th>
                <th>Categoria</th>
                <th>Atualiza</th>
                <th>Exclusao</th>            
            </tr>
        <?php
        //LISTA OS ADMINS
        while($linha = $cmd->fetch()) {
        ?>

        <tr>
            <td>
                <?php
                    echo $linha["PRODUTO_ID"];
                ?>
            </td>
            <td>
                <?php
                    echo $linha["PRODUTO_NOME"];
                ?>
            </td>
            <td>
                <?php
                    echo $linha["PRODUTO_DESC"];
                ?>
            </td>    
            <td>
                 <?php
                    echo $linha["PRODUTO_PRECO"];
                ?>
            </td>    
            <td>
                <?php
                    echo $linha["PRODUTO_DESCONTO"];
                ?>
            </td>
            <td>
                 <?php
                    echo $linha["CATEGORIA_NOME"];
                ?>
            </td>  
            <td>
                <a href="atualizaProdutos.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Atualizar</a>
            </td>      
            <td>
                <a href="excluirProduto.php?id=<?php echo $linha["PRODUTO_ID"] ?>">Excluir</a>
            </td>        
        </tr>
        <?php
        }//While($linha = $cmd-> fetch())
        
        ?>
        </table>
        <br>
        <a href="../Menu.html">Voltar para o Indice</a>    
    </body>
    </html>