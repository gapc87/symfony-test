<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class GreetingGenerator
{

	private $logger;

	public function __construct(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}



	public function getRandomGreeting()
	{

		$greetings = ['Hey', 'Yo', 'Aloha'];
		$greeting = $greetings[array_rand($greetings)];

		// var/log/dev.log
		$this->logger->info('Using the greeting: '.$greeting);

		return $greeting;
	}
}