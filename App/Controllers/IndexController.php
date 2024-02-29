<?php

 namespace App\Controllers;

 use MF\Controller\Action;
 use App\Connection;
 use App\Models\Produto;

    class IndexController extends Action{
       
       
        public function index(){
            //echo "estamos no indexcontroller e disparamos a action index";
           // $this->view->dados = array('sofa','cadeira', 'cama');
           //instancia de conexao
           //instanciar o modelo
           $conn = new Connection();
           $conn = $conn->getDb();

           $produto = new Produto($conn);
           $produtos = $produto->getProdutos();
           $this->view->dados = $produtos;
            $this->render('index', 'layout1');
        }
        public function sobreNos(){
            //echo "estamos no sobrenos e disparamos a action sobreNos";
           // $this->view->dados = array('notebook','desktop', 'tablet');
            $this->render('sobreNos', 'layout2');
        }
       
    }

?>