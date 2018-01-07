<!-- Manipulação de JSON -->
<?php
// $json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");
// $json = json_decode($json);
//
// $obj = new StdClass();
// $obj->codigo = '111';
// $obj->cidade = "Rio de Janeiro";
// $obj->uf = "RJ";
// $obj->baixa = 15;
// $obj->alta = 32;
// $obj->ico = 2;
// $obj->frase = "Alguma coisa";
// $obj->data = "...";
// $obj->dia_mes = "Setembro";
// $obj->dia_semana = "Quarta-Feira";
// $obj->selecionada = 1;
//
// $json->previsao[] = $obj;
//
// echo json_encode($json);

// echo "Cidades retornadas: ".count($json->previsao)."<br/><br/>";
//
// foreach ($json->previsao as $item) {
//     echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa." - Alta: ".$item->alta." - (".$item->frase.")<br/>";
// }


// Criando JSON do ZERO

$json = array(
    "nome"=>"Rafael",
    "idade"=>22,
    "sobrenome"=>"Silva",
    "site"=>"rafaeel16.github.io"
);

echo json_encode($json);
 ?>
