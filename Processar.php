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
$email = $_POST["email"];
$senha = $_POST["senha"];

//REALIZA uma QUERY SQL para BUSCAR o administrador que tenha o EMAIL e a senha passando
$cmdtext= "INSERT INTO ADMINISTRADOR( ADM_nome, adm_email, Adm_senha) Values('" . $nome . "','" . $email . "','" . $senha . "')";
$cmd= $pdo -> prepare($cmdtext);

$status= $cmd->execute();

if($status) {
    echo"adm criado com sucesso";
} else {
    echo "erro ao inserir";
}
?>
<br>
<a href="Menu.html">Ir para menu</a>

</body>
</html>