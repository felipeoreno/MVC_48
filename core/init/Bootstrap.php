<?php
    namespace Core\Init;

    abstract class Bootstrap{

        /* uma classe abstrata é definida como qualquer outra classe, porém
            é especial: não pode ser instanciada */
        /* serve como modelo para outras classes que a herdem */
        /* para ter um objeto da classe abstrata é necessária tem um classe
            herdeira dela */

        private $routes;

        // esse método abstrato irá ser implementado na classe herdeira
        abstract protected function initRoutes();
    
        // método construtor é iniciado toda vez que chamamos a classe Route, e
        //nesse caso carrega o método initRoutes (que contém as nossas rotas)
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        // faz a inserção da rota no atributo $routes
        public function setRoutes(array $routes){
            $this->routes = $routes;
        }

        // pega o valor contido no atributo $routes
        public function getRoutes(){
            return $this->routes;
        }

        public function getUrl(){
            // retorna a url digitada na barra de navegação em forma de string
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH );
        }

        public function run($url){
            // laço para percorrer todo o array $route contido em initRoutes()
            foreach ($this->getRoutes() as $indice => $route) {
                // verifica se a página digitada na url ($url) está contida dentro]
                // do array $route que está dentro de initRoutes()
                if($url == $route['route']){

                    // variável $class recebe o nome do controlador e cria o
                    // caminho: "App\controllers\nome do controlador
                    $class = "App\\controllers\\".ucfirst($route['controller']);

                    // variável $controller recebe a instância (Objeto) do controlador
                    // identificado na variável $class
                    $controller = new $class;

                    // capturamos qual a action solicitada pelo usuário na URL
                    $action = $route['action'];

                    // carregamos a página solicitada pelo usuário que está salva
                    // na variável $action
                    $controller->$action();
                }
            }
        }
    }
?>