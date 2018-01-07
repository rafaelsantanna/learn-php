<?php
$bd = new PDO('mysql:host=localhost;dbname=veiculos', 'root','');

$id = $_GET['id'];

$bd->query("DELETE FROM pessoa WHERE id='$id'");

header("location:index.php");

 ?>
