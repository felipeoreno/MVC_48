<?php
/* utilizamos a notação namespace em toda classe que criarmos. dessa forma,
 * o composer pode identificar o local da classe*/
    namespace App;

    use Core\Init\Bootstrap;

    class Route extends Bootstrap{
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
    }
?>