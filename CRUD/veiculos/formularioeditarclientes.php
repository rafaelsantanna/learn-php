<?php
$id = $_GET['id'];
$nome = $_GET['nome'];
$placa = $_GET['placa'];
$telefone = $_GET['telefone'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD Veiculos</title>
    <link rel="stylesheet" href="./css/bootstrap.css"  charset="utf-8">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>CRUD Veiculos</h1>
      </div>
      <div>
          <form action="atualizarcliente.php" method="post">
              <table class="table table-hover">
                <tr>
                  <td>ID</td><td><input type="text" name="id" value="<?php echo $id ?>"></input></td>
                </tr>
                <tr>
                  <td>Nome</td><td><input type="text" name="nome" value="<?php echo $nome ?>"></input></td>
                </tr>
                <tr>
                  <td>Placa</td><td><input type="text" name="placa" value="<?php echo $placa ?>"></input></td>
                </tr>
                  <tr>
                    <td>Telefone</td><td><input type="text" name="telefone" value="<?php echo $telefone ?>"></input></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="Atualizar" value="Atualizar"></input></td>
                  </tr>
              </table>
          </form>
      </div>
    </div>
  </body>
</html>
