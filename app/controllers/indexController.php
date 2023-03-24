<?php
    namespace App\controllers;

    class IndexController{

        // no contexto de MVC os métodos são chamados de action
        public function index() {
            // supondo que dados estejam vindo do banco
            $dados = array("Bombom", "Boneco chocolate neymar", "Barra chocolate");
            $this->render("index", $dados);
        }
    
        public function sobre_nos() {
            $dados = array("Mouse", "Teclado", "Pendrive", "Caixa de Som");
            $this->render("sobre_nos", $dados);
        }

        // responsável por renderizar (exibir) a página na tela
        public function render($view, $dados){
            // essa função retorna o nome da classe passada como argumento
            $class = get_class($this);

            $class = str_replace("App\\controllers\\", "", $class);
            $class = strtolower(str_replace("Controller", "", $class));

            echo($class);

            require_once("../app/views/index/".$view.".phtml");
        }
    }
?>