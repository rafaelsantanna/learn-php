<!-- Cache Intermediario -->
<!-- Salvando toda a página em uma variavel para depois jogar a variavel com a página guardada no cache -->
<?php
if(file_exists('cache.cache')) {
    require 'cache.cache';
} else {
    ob_start();//tudo que estiver dentro do OB não será impresso
    require 'index10.1.php';
    $html = ob_get_contents();
    ob_end_clean();
    file_put_contents('cache.cache', $html);
    echo $html;
}
 ?>
