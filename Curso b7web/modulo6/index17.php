<?php
//Instanciando uma Classe

class Cachorro {

    public function latir(){
        echo "Au au au <br />";
    }
}

$lula = new Cachorro(); //Para instanciar uma Classe, é so criar uma váriavel e utilizar o operador 'new Classe' para instanciar
$lula->latir();

$dudu = new Cachorro();
$dudu->latir();

Cachorro::latir(); // serve para acessar uma função publica da Classe

?>
