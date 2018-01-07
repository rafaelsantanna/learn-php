<?php
class controller {

    public function loadView($viewName, $vireData = array()) {
          extract($viewData);
          global $currentModule;

          include 'modules/'.$currentModule.'views/'.$viewName.'.php';
    }
}
 ?>
