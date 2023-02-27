<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('index', new Route('/', ['_controller' => '\App\Controller\MainController::indexAction']));
$routes->add('features', new Route('/features', ['_controller' => '\App\Controller\MainController::featuresAction']));
$routes->add('contact', new Route('/contact', ['_controller' => '\App\Controller\MainController::contactAction']));

return $routes;
