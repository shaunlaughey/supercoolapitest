#!/usr/bin/env php
<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../bootstrap.php';


use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

(new SingleCommandApplication())
    ->setName('My Super Command') // Optional
    ->setVersion('1.0.0') // Optional
    ->addArgument('password', InputArgument::OPTIONAL, 'Password for the server')
    ->addOption('username', null, InputOption::VALUE_REQUIRED)
    ->setCode(function (InputInterface $input, OutputInterface $output) {
    	$auth = [$input->getOption('username'),$input->getArgument('password')];
	    $client = new \GuzzleHttp\Client(["base_uri" => SERVER, "auth"=>$auth]);
		$response = $client->get(URL);
		echo PHP_EOL;
		echo $response->getBody();
		echo PHP_EOL;
    })
    ->run();

