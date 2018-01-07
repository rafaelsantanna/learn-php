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
          <form action="salvarcliente.php" method="post">
              <table class="table table-hover">
                <tr>
                  <td>ID</td><td><input type="text" name="id"></input></td>
                </tr>
                <tr>
                  <td>Nome</td><td><input type="text" name="nome"></input></td>
                </tr>
                <tr>
                  <td>Placa</td><td><input type="text" name="placa"></input></td>
                </tr>
                  <tr>
                    <td>Telefone</td><td><input type="text" name="telefone"></input></td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="salvar"></input></td>
                  </tr>
              </table>
          </form>
      </div>
    </div>
  </body>
</html>
