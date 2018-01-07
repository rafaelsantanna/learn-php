<?php
$bd = new PDO('mysql:host=localhost;dbname=veiculos', 'root','');

$id = $_POST['id'];
$placa = $_POST['placa'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$bd->query("UPDATE pessoa SET id='$id', nome='$nome', placa='$placa', telefone='$telefone' WHERE id='$id' ");

header("location:index.php");

 ?>
