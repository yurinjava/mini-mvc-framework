<?php

 namespace App\Controllers;
     
    class IndexController{
        public function index(){
            //echo "estamos no indexcontroller e disparamos a action index";
            require_once "../App/Views/index/index.phtml";
        }
        public function sobreNos(){
            //echo "estamos no sobrenos e disparamos a action sobreNos";
            require_once "../App/Views/index/sobreNos.phtml";
        }
        public function render($view){
            require_once "../App/Views/index/sobreNos.phtml";
        }
    }

?>