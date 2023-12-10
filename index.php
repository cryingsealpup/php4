<?php
/*
namespace Examples;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Selective\BasePath\BasePathMiddleware;
require 'vendor/autoload.php';
$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
$response->getBody()->write("Hello world!");
return $response;
});
$app->run(); -->
*/

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;
use Slim\Psr7\Response;
use Slim\Exception\NotFoundException;


require 'vendor/autoload.php';
$app = AppFactory::create();
$app->add(function (Request $request, RequestHandler $handler) {
    $response = $handler->handle($request);
    $existingContent = (string) $response->getBody();
    $response = new Response();
    $response->getBody()->write('BEFORE ' . $existingContent);
    return $response;
});
$app->add(function (Request $request, RequestHandler $handler) {
    $response = $handler->handle($request);
    $response->getBody()->write(' AFTER');
    return $response;
});
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
$app->run(); // singleton
