<?php
session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false) {
  $email = addslashes($_POST['email']);
  $senha = md5(addslashes($_POST['senha']));

  $dsn  = "mysql:dbname=blog;host=localhost";
  $dbuser = "root";
  $dbpass = "";

  try {
      $db = new PDO($dsn, $dbuser, $dbpass);

      $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

      if($sql->rowCount() > 0){

        $dado = $sql -> fetch();

        $_SESSION['id'] = $dado['id'];

        header("Location: index.php");
      }

  } catch (PDOException $e) {
      echo "Flalhou: ".$e->getMessage();
  }

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div class="container" style="width:20%;">
      <h4>página de login</h4> <br>
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de e-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Entrar</button>
</form>
</div>
  </body>
</html>
