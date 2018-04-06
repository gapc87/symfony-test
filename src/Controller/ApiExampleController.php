<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiExampleController extends AbstractController
{
    /**
     * @Route("/api/{example}", name="api_example")
     */
    public function index($example)
    {
        return $this->json([
        	'name' => $example,
        	'symfony' => 'rocks'
        ]);
    }
}
