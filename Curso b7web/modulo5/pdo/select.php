<?php

$dsn  = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass); //Fazendo a conexão e passando para uma variavel

    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql); //fazendo a conexão e passando a variavel que vai fazer a Query

    if ($sql->rowCount() > 0) { //rowCount conta as linhas da query

      foreach ($sql->fetchAll() as $usuario) { //fatchAll pega os dados da Query e transforma em um array
          echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br />";
      }

    } else {
      echo "Não há usuários cadastrados!";
    }

} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}


 ?>
