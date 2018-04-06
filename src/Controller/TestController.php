<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Services\GreetingGenerator;

class TestController extends AbstractController
{
    /**
     * @Route("/test/{name}", name="test")
     */
    public function index($name)
    {
    	//return new Response("Hello $name!");
        return $this->render('test/index.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/hello/{name}")
     */
    public function sayHello($name)
    {
        return new Response("Hola $name");
    }

    /**
     * @Route("/logger/{name}")
     */
    public function logger($name, LoggerInterface $logger, GreetingGenerator $generator)
    {

        $greeting = $generator->getRandomGreeting();

        // Escribirá en var/log/dev.log
        $logger->info("Saying hello to $name!");
        return new Response("Hola $name");
    }


}
