<?php
//Definindo Propriedades

class Cachorro {
    public $nome;
    private $idade;
}
$cachorro = new Cachorro();
$cachorro->nome = "Lulu";

echo "O nome do meu cachorro é: ".$cachorro->nome;
?>
