<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController
{

    public function indexAction(Request $request) : Response {
        return $this->generateResponse('index');
    }

    public function featuresAction(Request $request) : Response {
        return $this->generateResponse('features');
    }

    public function contactAction(Request $request) : Response {
        return $this->generateResponse('contact');
    }

    protected function generateResponse($item_id) : Response {
        $twig_loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../templates');
        $twig = new \Twig\Environment($twig_loader, []);

        $template = $twig->load('example.html.twig');

        $menu_items = [
            [
                'label' => 'Home',
                'href' => '/',
                'active' => ($item_id == 'index'),
            ],
            [
                'label' => 'Features',
                'href' => '/features',
                'active' => ($item_id == 'features'),
            ],
            [
                'label' => 'Contact',
                'href' => '/contact',
                'active' => ($item_id == 'contact'),
            ],
        ];

        return new Response($template->render(['menu_items' => $menu_items]));
    }

}
