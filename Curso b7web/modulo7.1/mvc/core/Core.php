<?php
class Core {

    public function run() {
        global $currentModule;
        $url = substr($_SERVER['PHP_SELF'], 34);

        if(!empty($url) && $url !='index.php') {
            $url = explode('/', $url);
            array_shift($url);

            $currentModule = $url[0];

            if(isset($url[1])) {
              $currentController = $url[1].'Controller';
            } else {
              $currentController = 'homeController';
            }
            if(isset($url[2])) {
                  $currentAction = $url[2];
            } else {
                  $currentAction = 'index';
            }
        } else {
              $currentModule = 'site';
              $currentController = 'homeController';
              $currentAction = 'index';
        }
        require_once 'core/controller.php';

        $c = new $currentController();
        $c->$currentAction();
    }

}
 ?>
