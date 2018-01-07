<?php
//Classe Completa(Resumo)

class Pessoa{ //Criando o objeto
    private $nome;
    public $idade;
    public $sexo;

    public function __construct($n, $i){ //metodo contrutor (Assim que o objeto for criado ele vai executar essa function)
        $this->nome = $n;
        $this->idade = $i;
    }
    public function getNome(){
      return $this->nome;
    }
}

$pessoa = new Pessoa("Rafael", 22); //Instanciando o objeto Pessoa

echo "Meu nome vai ser: ".$pessoa->getNome();

 ?>
