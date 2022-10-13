<html>
<head>
    <title>Atualiza os dados do Administrador</title>
</head>
<body>
    <br>
    <h1>Atualiza os dados do Administrador</h1>
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
    $admin = $pdo->query("SELECT * FROM ADMINISTRADOR WHERE ADM_ID=" . $id)->fetch() ;

    // Se o retorna for vazio (0), então a senha ou email estão incorretos
    $nome = $admin["ADM_NOME"];
    $email = $admin["ADM_EMAIL"];
    $senha = $admin["ADM_SENHA"];
?>    
    <Form Action="ProcessarAtualiza.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <br>
        Nome : 
        <input type="text" name="nome" value="<?php echo $nome ?>">
        <br>
        Email : 
        <input type="text" name="email" value="<?php echo $email ?>">
        <br>
        Senha : 
        <input type="password" name="senha" value="<?php echo $senha ?>">
        <br>
        <input type="submit" value="Enviar"> 
    </Form>
</body>
</html>