<?php

require_once __DIR__ . '/../vendor/autoload.php';

$twig_loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($twig_loader, []);

$template = $twig->load('example.html.twig');

$menu_items = [
  [
      'label' => 'Home',
      'href' => '#',
      'active' => TRUE,
  ],
  [
      'label' => 'Features',
      'href' => '#',
      'active' => FALSE,
  ],
  [
      'label' => 'Contact',
      'href' => 'https://google.com.ua/',
      'active' => FALSE,
  ],
];

echo $template->render(['menu_items' => $menu_items]);
