<?php

use Slim\Routing\RouteCollectorProxy;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\controllers\Artefacto;


$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Hola Prueba!");
    return $response;
});

$app->group('/api', function(RouteCollectorProxy $api){
    $api->group('/artefacto', function(RouteCollectorProxy $artefacto){
        $artefacto->get('/read[/{id}]', Artefacto::class . ':read');
        $artefacto->post('', Artefacto::class . ':create');
        $artefacto->put('/{id}', Artefacto::class . ':update');
        $artefacto->delete('/{id}', Artefacto::class . ':delete');
        $artefacto->get('/filtrar', Artefacto::class . ':filtrar');
    });
});

  