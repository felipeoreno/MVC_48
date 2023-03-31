<?php
    namespace Core\controller;
    use stdClass;

    abstract class Action{
        // criar um atributo vazio
        protected $view;

        //método cos
        public function __construct(){
            $this->view = new stdClass();
        }

        // responsável por renderizar (exibir) a página na tela
        protected function render($view, $layout = "layout"){
            $this->view->page = $view;

            if(file_exists("../app/views/layout/".$layout.".phtml")){
                require_once("../app/views/layout/".$layout.".phtml");
            } else{
                $this->view->page ="error";
                require_once("../app/views/layout/layout.phtml");
            }
        }

        public function content(){
            // essa função retorna o nome da classe passada como argumento
            $class = get_class($this);
            $class = str_replace("App\\controllers\\", "", $class);
            $class = strtolower(str_replace("Controller", "", $class));

            require_once("../app/views/".$class."/".$this->view->page.".phtml");
        }
    }
?>