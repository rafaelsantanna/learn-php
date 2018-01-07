<?php

$dsn  = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass); //Fazendo a conexão e passando para uma variavel

    $sql = "DELETE FROM usuarios WHERE id = 10";
    $pdo->query($sql);

    echo "Usuário deletado com sucesso!";

} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}


 ?>
