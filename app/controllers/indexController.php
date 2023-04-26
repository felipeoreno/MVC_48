<?php
    namespace App\controllers;
    use Core\controller\Action;

    class IndexController extends Action{
        // no contexto de MVC os métodos são chamados de action
        public function index() {
            // temos que criar uma instância de conexão 
            $this->view->dados = array("boneco", "Barra chocolate");
            $this->render("index");
        }
    
        public function sobre_nos() {
            // supondo que dados estejam vindo do banco
            $this->view->dados = array("Mouse", "Teclado", "Pendrive", "Caixa de Som");
            $this->render("sobre_nos", "layout2");
        }

        //responsavel por renderizar (exibir) a pagina na tela

    }
?>