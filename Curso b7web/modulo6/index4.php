<?php
//Redimensionando/cortando imagens

$arquivo = "imagem.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo); //retorna o tamanho da imagem

$ratio = $largura_original / $altura_original;

if ($largura / $altura > $ratio) {
  $largura = $altura * $ratio;
} else {
  $altura = $largura / $ratio;
}

$imagem_final = imagecreatetruecolor($largura, $altura);//cria um documento novo
$imagem_original = imagecreatefromjpeg($arquivo);//cria a imagem

imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);//copia a imagem para o documento novo.

header("Content-Type: image/jpeg");//é necessário esta linha para poder mostrar o arquivo de imagem.
imagejpeg($imagem_final, null, 100); // mostra a imagem, O segundo parametro é para salvar a imagem e o terceiro é a qualidade(o parametro qualidade só serve para jpeg)
?>
