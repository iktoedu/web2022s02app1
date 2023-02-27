<?php

require_once __DIR__ . '/../vendor/autoload.php';

$twig_loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($twig_loader, []);

$template = $twig->load('example.html.twig');

$menu_items = [
  [
      'label' => 'Home',
      'href' => '/',
      'active' => ($_SERVER['REQUEST_URI'] != '/features' && $_SERVER['REQUEST_URI'] != '/contact'),
  ],
  [
      'label' => 'Features',
      'href' => '/features',
      'active' => ($_SERVER['REQUEST_URI'] == '/features'),
  ],
  [
      'label' => 'Contact',
      'href' => '/contact',
      'active' => ($_SERVER['REQUEST_URI'] == '/contact'),
  ],
];

echo $template->render(['menu_items' => $menu_items]);
