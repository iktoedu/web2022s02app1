<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$controller = new \App\Controller\MainController();
switch ($request->getPathInfo()) {
    case '/features':
        $response = $controller->featuresAction($request);
        break;
    case '/contact':
        $response = $controller->contactAction($request);
        break;
    default:
        $response = $controller->indexAction($request);
        break;
}

$response->send();
