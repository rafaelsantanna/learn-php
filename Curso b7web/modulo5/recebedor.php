<!-- Upload de Arquivos -->
<?php
$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

      $nomedoarquivo = md5(time().rand(0,90)).'.png';

      move_uploaded_file($arquivo['tmp_name'],'/opt/lampp/htdocs/curso/modulo5/'.$nomedoarquivo);
      echo "Arquivo enviado com Sucesso";
}
 ?>
