<?php
namespace Examples;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
require '../../vendor/autoload.php';
$app = AppFactory::create();
var_dump($_SERVER);
$app->setBasePath("/labs/Middleware/");
$app->addErrorMiddleware(true, true, true);


$app->get('/labs/Middleware/', function (Request $request, Response $response, $args) {
$response->getBody()->write("Hello world!");
return $response;
});
$app->run();
