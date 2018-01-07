<?php
//Getter & Setter
class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){ // A vantagem do getter e Setter é que eu posso definir condições e também manter a propriedade como private
        $this->titulo = $t;
    }
}

$post = new Post();
$post->setTitulo("Titulo da postagem");

echo "Titulo: ".$post->getTitulo();


?>
