<?php
    namespace App\controllers;

    class indexController{
        public function index(){
            echo('Controlador em ação: IndexController');
            echo('<br>');
            echo('Página carregada: Index');
        }
        
        public function sobre_nos(){
            echo('Controlador em ação: SobreController');
            echo('<br>');
            echo('Página carregada: Sobre Nós');
        }
    }
?>