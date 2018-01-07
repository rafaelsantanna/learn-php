<?php

$dsn  = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass); //Fazendo a conexão e passando para uma variavel

    $nome = "Testador";
    $email = "teste@hotmail.com";
    $senha = md5("123");

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);//Executa a query

    echo "Usuario inserido: ".$pdo->lastInsertId();

} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}

 ?>
