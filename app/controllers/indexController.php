<?php
    namespace App\controllers;
    use Core\controller\Action;

    class IndexController extends Action{
        // no contexto de MVC os métodos são chamados de action
        public function index() {
            // supondo que dados estejam vindo do banco
            $this->view->dados = array("Bombom", "Boneco chocolate neymar", "Barra chocolate");
            $this->render("index");
        }
    
        public function sobre_nos() {
            // supondo que dados estejam vindo do banco
            $this->view->dados = array("Mouse", "Teclado", "Pendrive", "Caixa de Som");
            $this->render("sobre_nos");
        }
    }
?>