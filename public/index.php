<?php
use DI\Container as Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Util\Connection;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
//da inserire prima della create di AppFactory
AppFactory::setContainer($container);

$app = AppFactory::create();

//Questa parte deve essere sostituita con il nome della propria+
//sottocartella dove si trova l'applicazione
$app->setBasePath("/registrazione_esami");

$container->set('template', function (){
    return new League\Plates\Engine('../templates', 'phtml');
});

$container->set('connection', function (){
    return Connection::getInstance();
});

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/altra_pagina', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Questa è un'altra pagina");
    return $response;
});

$app->get('/template/{name}', function (Request $request, Response $response, $args) {
    $template = $this->get('template');
    $variabile = [ 'name' => $args['name']];
    $response->getBody()->write($template->render('esempio', $variabile));
    return $response;
});

$app->run();