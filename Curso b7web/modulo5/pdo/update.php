<?php

$dsn  = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass); //Fazendo a conexão e passando para uma variavel

    $novasenha = md5("teste123");

    $sql = "UPDATE usuarios SET senha = '$novasenha' WHERE id = 4";
    $pdo->query($sql);

    //$sql = "UPDATE usuarios SET email = 'abc@hotmail.com' WHERE email = 'beitrano@yahoo.com.br'";
    //$sql = $pdo->query($sql);

    echo "Usuário alterado com sucesso!";

} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}


 ?>
