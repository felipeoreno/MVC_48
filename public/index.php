<?php
    require_once ("../vendor/autoload.php");
    use App\Route;

    $route = new Route;

    echo('<pre>');
    print_r($route->getUrl());
    echo('<br>');
    print_r($route->getRoutes());
?>