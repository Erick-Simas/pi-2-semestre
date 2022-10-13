<html>
<head>
    <title> Login - Autenticação </title>
</head>

<body>
    <br>
        <h1> Login - Autenticação </h1>
    <br>

<?php
//Dados para conexão ao MYSQL
$mysqlhostname = "144.22.244.104";
$mysqlport = "3306";
$mysqlpassword = "Bravo4Fun";
$mysqlusername = "Bravo4Fun";
$mysqldatabase = "Bravo4Fun";

//MOSTRA uma string de conexão ao MYSQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';porta=' . $mysqlport ;
$pdo = new  PDO ( $dsn , $mysqlusername , $mysqlpassword );

//CAPTURA o post do usuario
$email = $_POST [" e-mail "];
$senha = $_POST [" senha "];

//REALIZA uma QUERY SQL para BUSCAR o administrador que tenha o EMAIL e a senha passando
$admin = $pdo -> query (" SELECT * FROM ADMINISTRADOR WHERE ADM_EMAIL=' " . $email . " ' AND ADM_SENHA=' " . $senha . " ' ")-> fetchAll ();

//Se o retorna para vazio (0), então a senha ou emailestão incorretos

if (conta($admin) == 0 ){
    echo " Usuário ou senha inválida ";
} else {
    echo " Usuário autenticado ";
}
?>
</body>
</html>