<?php
//Abstração de Classes

abstract class Animal { //Para usar metodo abstrato a classe deve ser abstrata
  private $nome;
  private $idade;

  abstract protected function andar(); // O metodo abstrato é obrigatoriamente necessário declarar nas classes que se extendem

  public function setNome($n) {
      $this->nome = $n;
  }
  public function getNome(){
      return $this->nome;
  }
}

class Cavalo extends Animal {
    private $quantidade_de_patas;
    private $tipo_de_pelo;

    public function andar(){

    }
}
$cavalo = new Cavalo();
$cavalo->setNome("Cavalo Teste");
echo "Meu cavalo e ".$cavalo->getNome();
 ?>
