<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$request = Request::createFromGlobals();
$routes = include __DIR__ . '/../include/routes.php';

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

$attributes = $matcher->matchRequest($request);
[$controller_class, $controller_method] = explode('::', $attributes['_controller']);

$controller = new $controller_class;
$response = $controller->{$controller_method}($request);

$response->send();
