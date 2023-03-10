<?php
/* utilizamos a notação namespace em toda classe que criarmos. dessa forma,
 * o composer pode identificar o local da classe*/
    namespace App;

    class Route{

        private $routes;
    
        // método construtor é iniciado toda vez que chamamos a classe Route e
        //nesse carrega o método initRoutes (que contém as nossas rotas)
        public function __construct(){
            $this->initRoutes();
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

        // função que configura as rotas disponíveis no site
        public function initRoutes(){
            /*definição dos caminhos digitado no navegador, onde:
             *route é a url que foi digitada
             *controller é o controlador responsável por abrir esta página
             *action é a página a ser aberta */
            $routes['home'] = array(
                'route'         =>  '/',
                'controller'    =>  'indexController',
                'action'        =>  'index'
            );
            
            $routes['sobre_nos'] = array(
                'route'         =>  '/sobre_nos',
                'controller'    =>  'indexController',
                'action'        =>  'sobre_nos'
            );

            $this->setRoutes($routes);
        }

        public function run(){
            foreach ($this->getRoutes as $indice => $route) {
                //continua na próxima aula
            }
        }
    }
?>