<html>
<head>
    <title>Processamento de Atualizacao do Produto</title>
</head>
<body>
    <br>
    <h1>Processamento de Atualizacao do Produto</h1>
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
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $desconto = $_POST["desconto"];
    $categoria = $_POST["categoria"];
    $ativo = $_POST["ativo"];

    // Monta o comando de inserção
    $cmdtext = "UPDATE PRODUTO SET PRODUTO_NOME='" . $nome . "',PRODUTO_DESC='" . $descricao . "', PRODUTO_PRECO=" . $preco . ",PRODUTO_DESCONTO=" . $desconto . ",CATEGORIA_ID=" . $categoria . ",PRODUTO_ATIVO=" . $ativo;

    //( PRODUTO_NOME, PRODUTO_DESC, PRODUTO_PRECO, PRODUTO_DESCONTO,CATEGORIA_ID,PRODUTO_ATIVO)
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
    <a href="listaProduto.php">Voltar para a Pagina de Lista</a>
</body>
</html>