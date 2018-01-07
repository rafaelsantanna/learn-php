<?php
//Manipulando imagens com GD

$imagem = "imagem.jpg";

list($largura_original, $altura_original) = getimagesize($imagem); // retorna o tamanho da imagem
list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpg");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original); //Cria o Documento onde vamos colar a imagem

$imagem_original = imagecreatefromjpeg("imagem.jpg"); //Function que cria a imagem
$imagem_mini = imagecreatefromjpeg("mini_imagem.jpg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original); //Copia a imagem para o documento novo.

imagecopy($imagem_final, $imagem_mini, 100, 200, 0, 0, $largura_mini, $altura_mini);

header("Content-Type: image/png"); // transforma o documento em imagem
imagejpeg($imagem_final, null, 100);//mostra a imagem, O segundo parametro é para salvar a imagem e o terceiro é a qualidade(o parametro qualidade só serve para jpeg)
 ?>
