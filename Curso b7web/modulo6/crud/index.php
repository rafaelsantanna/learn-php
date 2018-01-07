<?php
require 'banco.php';
$banco = new Banco("localhost", "blog", "root", "");//instancia da classe Banco

// $banco->insert("usuarios", array(
//     "nome" => 'Guy',
//     "email" => 'guy@gmail.com'
// ));

// $banco->delete("usuarios", array("id"=>"5"));
// echo "Deletado com Sucesso!";

// $banco->update("usuarios",
//     array("nome"=>"Rafael"),
//     array("id"=>"1"));

// echo "Inserido com sucesso";

$banco->query("SELECT * FROM usuarios");//Executa a consulta

if($banco->numRows() > 0){
  foreach($banco->result() as $usuarios) {
      echo "id: ".$usuarios['id']."<br />";
      echo "Nome: ".$usuarios['nome']."<br />";
      echo "Email: ".$usuarios['email']."<br />";
      echo "Senha: ".$usuarios['senha']."<br />";
      echo "<hr />";
  }
} else {
  echo "Não houve resultados.";
}
?>
