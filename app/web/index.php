<?php

$menu_items = [
  [
      'label' => 'Home',
      'href' => '#',
      'active' => FALSE,
  ],
  [
      'label' => 'Features',
      'href' => '#',
      'active' => FALSE,
  ],
  [
      'label' => 'Contact',
      'href' => 'https://google.com.ua/',
      'active' => TRUE,
  ],
];

ob_start();
include __DIR__ . '/../templates/example.tpl.php';
$output = ob_get_clean();

echo $output;
