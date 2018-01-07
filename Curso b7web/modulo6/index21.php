<?php
//Métodos Auxiliares

class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentario;
    private $qtComentarios;

    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo() {
        if(is_string($t)) {
            $this->titulo = $t;
        }
    }

    public function addComentario($msg) {
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }
    public function getQuantosComentarios() {
        return $this->qtComentarios;
    }

    private function contarComentarios() { //Metodo Auxiliar
        $this->qtComentarios = count($this->comentarios);
    }

}

$post = new Post();
$post->addComentario("teste");
$post->addComentario("teste 2");
$post->addComentario("teste 3");
$post->addComentario("teste 4");

echo "Quantidade de comentarios: ".$post->getQuantosComentarios();
 ?>
