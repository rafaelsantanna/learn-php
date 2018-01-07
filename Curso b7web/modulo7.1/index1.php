<?php
//Metodo para carregar todas as classes automaticamente
spl_autoload_register(function ($class) {
    if(file_exists($class.'.class.php')) {
        require_once($class.'.class.php');
    }
});

$obj = new bola();
$obj->setCor('Azul');

echo "A cor da bole é: ".$obj->getCor();

?>
