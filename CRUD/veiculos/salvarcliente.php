<?php
$bd = new PDO('mysql:host=localhost;dbname=veiculos', 'root','');

$id = $_POST['id'];
$nome = $_POST['nome'];
$placa = $_POST['placa'];
$telefone = $_POST['telefone'];

$bd->query("INSERT INTO pessoa VALUES('$id','$nome','$placa','$telefone')");

header("location:index.php");

 ?>
