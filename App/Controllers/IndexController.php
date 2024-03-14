<?php

 namespace App\Controllers;

 use MF\Controller\Action;
 use MF\Model\Container;
 
 use App\Models\Produto;
 use App\Models\Info;


    class IndexController extends Action{
       
       
        public function index(){
            //echo "estamos no indexcontroller e disparamos a action index";
           // $this->view->dados = array('sofa','cadeira', 'cama');
           //instancia de conexao
           //instanciar o modelo
            Container::getModel('Produto');

           $conn = new Connection();
           $conn = $conn->getDb();

           $produto = new Produto($conn);
           $produtos = $produto->getProdutos();
           $this->view->dados = $produtos;
            $this->render('index', 'layout1');
        }
        public function sobreNos(){
          
            $conn = new Connection();
            $conn = $conn->getDb();
            $info = new Info($conn);
            $informacoes = $info->getInfo();

            $this->view->dados = $informacoes;
            $this->render('sobreNos', 'layout2');
        }
       
    }

?>