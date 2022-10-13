<html>
<head>
    <title>Atualiza os dados do Produto</title>
</head>
<body>
    <br>
    <h1>Atualiza os dados do Produto</h1>
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

    // Coleta os dados do Administrador
    $id = $_GET["id"];

    // Realiza uma Query SQL para buscar o administrador que tenha o EMAIL e a SENHA passado pelo usuario
    $produtos = $pdo->query("SELECT * FROM PRODUTO WHERE PRODUTO_ID=" . $id)->fetch() ;

    // Se o retorna for vazio (0), então a senha ou email estão incorretos
    $nome = $produtos["PRODUTO_NOME"];
    $descricao = $produtos["PRODUTO_DESC"];
    $preco = $produtos["PRODUTO_PRECO"];
    $desconto = $produtos["PRODUTO_DESCONTO"];
    $categoria = $produtos["CATEGORIA_ID"];
    $ativo = $produtos["PRODUTO_ATIVO"];
?>
    <Form Action="processarAtualizacao.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
        Nome : 
        <input type="text" name="nome" value="<?php echo $nome ?>">
        <br>
        descricao : 
        <input type="text" name="descricao" value="<?php echo $descricao ?>">
        <br>
        preco : 
        <input type="text" name="preco" value="<?php echo $preco ?>">
        <br>
        desconto :
        <input type="text" name="desconto" value="<?php echo $desconto ?>">
        <br>
        categoria :
        <input type="text" name="categoria" value="<?php echo $categoria ?>">
        <br>
        ativo :
        <input type="text" name="ativo" value="<?php echo $ativo ?>">
        <br>
        <input type="submit" value="Enviar"> 
    </Form>  
    </body>
</html>  