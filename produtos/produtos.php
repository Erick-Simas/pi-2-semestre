<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="categoriaModal.css">

</head>
<body>
    <form action="processarProduto.php" method="POST">
    <fieldset>
        <h1>Produto</h1>
        <div>
            <label>Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label>descrição</label>
            <input type="text" name="descricao" id="descricao">
        </div>
        <div>
            <label>preço</label>
            <input type="number" name="preco" id="preco">
        </div>
        <div>
            <label>desconto</label>
            <input type="number" name="desconto" id="desconto">
        </div>
        <div>
            <label>categoria</label>
            <input type="number" name="categoria" id="categoria">
        </div>
        <div>
            <label>ativo</label>
            <input type="number" name="ativo" id="ativo">
        </div>
        <div>
        <input type="submit" class="cadastrar" value="Cadastrar"> 
        </div>
    </fieldset>    
    </form>
    <button id="myBtn">Lista de categorias</button>
    <div id="myModal" class="modal">

        <div class="modal-content">
          <span class="close">&times;</span>
          <h1>Crie sua categoria</h1>
          <br>
        <form action="processarCategoria.php" method="POST">
        <fieldset class="formulario">
        
            <div>
                Nome : <br>
                <input type="text" name="nome">
                <br>
                Descricao : <br>
                <input type="text" name="descricao">
                <br>
                <br>
                <input type="submit" class="cadastrar" value="Cadastrar"> 
            </div>
        </fieldset>
    </form>
    <h1>Lista de categorias</h1>
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
  
  $cmd = $pdo->query("SELECT * FROM CATEGORIA ");
  ?>
  <br>
  
          <table border="1">
              <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Descricao</th>           
              </tr>
          <?php
          //LISTA OS ADMINS
          while($linha = $cmd->fetch()) {
          ?>
  
          <tr>
              <td>
                  <?php
                      echo $linha["CATEGORIA_ID"];
                  ?>
              </td>
              <td>
                  <?php
                      echo $linha["CATEGORIA_NOME"];
                  ?>
              </td>
              
              <td>
                   <?php
                      echo $linha["CATEGORIA_NOME"];
                  ?>
              </td>      
          </tr>
          <?php
          }//While($linha = $cmd-> fetch())
          
          ?>
          </table>
        </div>
    </div>
    <script src="categoriaModal.js"></script>
</body>
</html>