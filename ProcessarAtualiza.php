<html>
<head>
    <title>Processamento de Atualizacao de Administrador</title>
</head>
<body>
    <br>
    <h1>Processamento de Atualizacao de Administrador</h1>
    <br>
<?php
    // Dados para conexao ao MySQL
    $mysqlhostname = "144.22.244.104";
    $mysqlport = "3306";
    $mysqlpassword = "Bravo4Fun";
    $mysqlusername = "Bravo4Fun";
    $mysqldatabase = "Bravo4Fun";


    // Monta a String de Conexao ao MySQL e Conecta no banco de dados
    $dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;           
    $pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);

    // Captura os valores das variaveis
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Monta o comando de inserção
    $cmdtext = "UPDATE ADMINISTRADOR SET ADM_NOME='" . $nome . "', ADM_EMAIL='" . $email . "', ADM_SENHA='" . $senha . "' WHERE ADM_ID=" .$id;
    $cmd = $pdo->prepare($cmdtext);

    // Executa o comando e verifica se teve sucesso
    $status = $cmd->execute();
    if($status) {
        echo "Atualizacao com sucesso!";
    } else {
        echo "Ocorreu um erro ao atualizacao";
    }
?>
    <br>
    <a href="listaAdms.php">Voltar para a Pagina de Lista</a>
</body>
</html>