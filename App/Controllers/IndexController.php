<?php

 namespace App\Controllers;
     
    class IndexController{
        public function index(){
            //echo "estamos no indexcontroller e disparamos a action index";
            $dados = array('sofa','cadeira', 'cama');
            $this->render('index', $dados);
        }
        public function sobreNos(){
            //echo "estamos no sobrenos e disparamos a action sobreNos";
            $dados = array('notebook','desktop', 'tablet');
            $this->render('sobreNos', $dados);
        }
        public function render($view, $dados){
            $classAtual = get_class($this);
            str_replace('App\\Controllers\\','');
            require_once "../App/Views/index/".$view.".phtml";
        }
    }

?>