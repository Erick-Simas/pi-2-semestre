<html>
    <head>
        <title>Listar os Administradores</title>
    </head>
    <body>
        <h1>Listar os Administradores</h1>
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

$cmd = $pdo->query("SELECT * FROM ADMINISTRADOR Limit 10");
?>
<br>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
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
                    echo $linha["ADM_ID"];
                ?>
            </td>
            <td>
                <?php
                    echo $linha["ADM_NOME"];
                ?>
            </td>    
            <td>
                 <?php
                    echo $linha["ADM_EMAIL"];
                ?>
            </td>    
            <td>
                <?php
                    echo $linha["ADM_SENHA"];
                ?>
            </td>
            <td>
                <a href="Atualiza.php?id=<?php echo $linha["ADM_ID"] ?>">Atualizar</a>
            </td>      
            <td>
                <a href="excluirform.php?id=<?php echo $linha["ADM_ID"] ?>">Excluir</a>
            </td>        
        </tr>
        <?php
        }//While($linha = $cmd-> fetch())
        
        ?>
        </table>
        <br>
        <a href="Menu.html">Voltar para o Indice</a>    
    </body>
    </html>