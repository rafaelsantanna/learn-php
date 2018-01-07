<?php
$bd = new PDO('mysql:host=localhost;dbname=veiculos', 'root','');
$pessoa = $bd->query('SELECT * FROM pessoa')->fetchAll(PDO::FETCH_OBJ);
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
        <table class="table table-hover">
        <td>ID</td>
        <td>Nome</td>
        <td>Placa</td>
        <td>Telefone</td>
          <?php foreach($pessoa as $pessoas): ?>
            <tr>
              <td><?php echo $pessoas->id ?></td>
              <td><?php echo $pessoas->nome ?></td>
              <td><?php echo $pessoas->placa ?></td>
              <td><?php echo $pessoas->telefone ?></td>
              <td>
                <a href="formularioeditarclientes.php?id=<?php echo $pessoas->id ?> & placa=<?php echo $pessoas->placa ?> & nome=<?php echo $pessoas->nome ?> & telefone=<?php echo $pessoas->telefone ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
              </td>
              <td>
                <a href="deletarcliente.php?id=<?php echo $pessoas->id ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
        <a href="formularioclientes.php" class="btn btn-primary">Novo Cliente</a>
      </div>
  </body>
</html>
