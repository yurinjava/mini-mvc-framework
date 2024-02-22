<?php

 namespace App\Controllers;

 use MF\Controller\Action;

    class IndexController extends Action{
       
       
        public function index(){
            //echo "estamos no indexcontroller e disparamos a action index";
            $this->view->dados = array('sofa','cadeira', 'cama');
            $this->render('index', 'layout1');
        }
        public function sobreNos(){
            //echo "estamos no sobrenos e disparamos a action sobreNos";
            $this->view->dados = array('notebook','desktop', 'tablet');
            $this->render('sobreNos', 'layout2');
        }
       
    }

?>