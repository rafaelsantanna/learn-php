<!-- Templates -->
<?php
require 'template.php';

  $array = array(
      "titulo" => "Titulo da página",
      "nome" => "Fulano",
      "idade" => 22
    );

$tpl = new Template('template.html');
$tpl->render($array);
 ?>
