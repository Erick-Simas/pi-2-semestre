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

//CAPTURA o post do usuario
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

//REALIZA uma QUERY SQL para BUSCAR o administrador que tenha o EMAIL e a senha passando
$cmdtext= "INSERT INTO CATEGORIA( CATEGORIA_NOME, CATEGORIA_DESC) Values('" . $nome . "','" . $descricao . "')";
$cmd= $pdo -> prepare($cmdtext);

$status= $cmd->execute();

if($status) {
    echo"Categoria criada com sucesso";
} else {
    echo "erro ao inserir";
}
?>
<br>
<a href="produtos.php">Voltar</a>

</body>
</html>