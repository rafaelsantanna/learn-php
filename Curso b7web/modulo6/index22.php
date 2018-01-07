<?php
//Polimorfismo - é quando substitui uma função herdada para a função do próprio objeto

class Animal {
  public function getNome() {
    echo "getNome da classe Animal";
  }

  public function testar() {
      echo "testado";
  }
}

class Cachorro extends Animal {
  public function getNome() {
      $this->testar();
      echo "<br />getNome da classe Cachorro";
  }
}

$cachorro = new Cachorro();
$cachorro->getNome();
 ?>
