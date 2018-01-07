<?php
//Interface
//metodos de interface só podem ser publicos
//interfaces não podem ter conteudos nos metodos
//a classe que herdar a interface que vai definir os metodos
//a interface força a classe que a utilizar a usar os metodos
interface Animal {

    public function andar();
}
//para herdar uma interface deve-se usar implements
class Cachorro implements Animal{

    public function andar() {
      echo "Estou andando..";
    }
}

$cachorro = new Cachorro();
$cachorro->andar();
 ?>
