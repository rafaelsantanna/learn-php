<?php
//Construtor

class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    //O metodo construtor executa antecipadamente a função ao instanciar o objeto.
    public function __construct($t, $c) { //Criação do metodo construtor
        $this->setTitulo($t);
        $this->setCorpo($c);
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($t) {
        if(is_string($t)) { //Verifica se é String
            $this->titulo = $t;
        }
    }
    public function setCorpo($c) {
        $this->corpo = $c;
    }
}

$post = new Post("Titulo Qualquer", "Corpo da minha postagem");
echo "Titulo do post: ".$post->getTitulo();
 ?>
