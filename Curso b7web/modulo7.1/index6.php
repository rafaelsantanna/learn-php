<?php
//Padrão Singleton

class Pessoa {

  private $nome;
  //private $idade;

  public static function getInstance() {

      static $instance = null;
      if($instance === null){
          $instance = new Pessoa();
      }
      return $instance;
  }

  private function __contruct() {

  }

  public function setNome($n) {
        $this->nome = $n;
  }

  public function getNome() {
        return $this->nome;
  }

//   public function getIdade($i) {
//       $this->idade = $i;
//   }
//
//   public function getIdade() {
//       return $this->idade;
//   }
// }

$cara = Pessoa::getInstance();
$cara->setNome("Rafael");

echo "Meu nome e: ".$cara->getNome();
// $cara2 = Pessoa::getInstance();
// $cara2->setIdade(90);
//
// echo "Minha idade e: ".$cara->getIdade();

 ?>
